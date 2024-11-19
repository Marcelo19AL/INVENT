<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $latestPost = Post::latest()->first();
        $posts = Post::latest()->take(5)->get();

        return view('blog.post.index', compact('latestPost', 'posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $recentPosts = Post::where('id', '!=', $id)->orderBy('fecha_publicacion', 'desc')->take(3)->get();
        return view('blog.post.show', compact('post', 'recentPosts'));
    }


    public function create()
    {
        return view('blog.post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'contenido' => 'required',
            'detalle' => 'required',
            'fecha_publicacion' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10000',
        ]);

        if ($request->hasFile('imagen')) {
            $imageName = time() . '.' . $request->imagen->extension();
            $request->imagen->move(public_path('images'), $imageName);
            $validatedData['imagen'] = $imageName;
        }
        if ($request->hasFile('archivo')) {
            $fileName = time() . '.' . $request->archivo->extension();
            $request->archivo->storeAs('public/post', $fileName);
            $validatedData['archivo'] = $fileName;
        }

        Post::create($validatedData);

        return redirect()->route('posts.index')
            ->with('success', 'Post creado exitosamente');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog/post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'contenido' => 'required',
            'detalle' => 'required',
            'fecha_publicacion' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'archivo' => 'nullable|mimes:pdf|max:10000',
        ]);

        if ($request->hasFile('imagen')) {
            $imageName = time() . '.' . $request->imagen->extension();
            $request->imagen->move(public_path('images'), $imageName);
            $validatedData['imagen'] = $imageName;
        }

        Post::whereId($id)->update($validatedData);

        return redirect()->route('posts.index')
            ->with('success', 'Post actualizado exitosamente');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post eliminado exitosamente');
    }

    public function search(Request $request)
    {
        $searchTitle = $request->input('titulo');
        $searchAuthor = $request->input('autor'); // Nuevo campo para buscar por autor
        $searchDate = $request->input('fecha_publicacion');

        // Obtener el artículo más reciente para pasar a la vista
        $latestPost = Post::latest()->first();

        $posts = Post::query()
            ->when($searchTitle, function ($query) use ($searchTitle) {
                $query->where('titulo', 'like', '%' . $searchTitle . '%');
            })
            ->when($searchAuthor, function ($query) use ($searchAuthor) { // Condición para buscar por autor
                $query->where('autor', 'like', '%' . $searchAuthor . '%');
            })
            ->when($searchDate, function ($query) use ($searchDate) {
                $query->whereDate('fecha_publicacion', '=', $searchDate);
            })
            ->get();

        return view('blog.post.index', compact('latestPost', 'posts'));
    }

    public function archivo($archivo)
    {
        $path = storage_path('app/public/post/' . $archivo);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404, 'Archivo no encontrado');
        }
    }
}
