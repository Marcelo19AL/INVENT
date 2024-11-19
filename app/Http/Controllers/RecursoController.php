<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Recurso;

class RecursoController extends Controller
{

    public function filtrar($categoria)
    {
        // Obtener recursos filtrados por categoría
        $recursos = ($categoria == '') ? Recurso::all() : Recurso::where('categoria_id', $categoria)->get();

        // Devolver los recursos en formato JSON
        return response()->json($recursos);
    }

    /**
     * Muestra una lista de recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtener el ID de la categoría seleccionada (si está presente)
        $categoriaId = $request->input('categoria');

        // Obtener todos los recursos o filtrar por categoría si se selecciona una
        $recursos = ($categoriaId) ? Recurso::where('categoria_id', $categoriaId)->get() : Recurso::all();

        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Pasar los recursos y las categorías a la vista
        return view('blog.recursos.index', compact('recursos', 'categorias'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        // Devolver la vista del formulario de creación
        return view('blog.recursos.create', compact('categorias'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:4000',
            'archivo' => 'required|file|max:1073741824', // Tamaño máximo de 1TB
            'categoria_id' => 'required|exists:categorias,id', // Validación de la existencia de la categoría
        ]);

        // Almacena el archivo en la carpeta de almacenamiento pública
        $archivo = $request->file('archivo')->store('public/recursos');

        // Extrae solo el nombre del archivo para almacenar en la base de datos
        $archivoNombre = basename($archivo);

        // Crea el recurso en la base de datos
        Recurso::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'archivo' => $archivoNombre, // Guarda solo el nombre del archivo
            'categoria_id' => $request->categoria_id, // Almacena la categoría asociada al recurso
        ]);

        // Redireccionar a la vista principal de recursos
        return redirect()->route('recursos.index')->with('success', 'Recurso creado correctamente.');
    }




    /**
     * Muestra el recurso específico.
     *
     * @param  \App\Models\Recurso  $recurso
     * @return \Illuminate\Http\Response
     */
    public function show(Recurso $recurso)
    {
        return view('blog.recursos.show', compact('recurso'));
    }

    /**
     * Muestra el archivo.
     *
     * @param  string  $archivo
     * @return \Illuminate\Http\Response
     */
    public function archivo($archivo)
    {
        $path = storage_path('app/public/recursos/' . $archivo);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404, 'Archivo no encontrado');
        }
    }
}
