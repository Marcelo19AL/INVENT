<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecursoController;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('landing');
});

Route::get('/nuestra-identidad', function () {
    return view('quienes-somos/identidad');
})->name('identidad');

Route::get('/equipo-invent', function () {
    return view('quienes-somos/equipo');
})->name('equipo');

Route::get('/programa-formativo-internacional', function () {
    return view('formacion/programa');
})->name('programa');

Route::get('/convenios', function () {
    return view('formacion/convenios');
})->name('convenios');

Route::get('/referentes', function () {
    return view('formacion/referentes');
})->name('referentes');

Route::get('/publicaciones', function () {
    return view('investigacion/publicaciones');
})->name('publicaciones');

Route::get('/redes-sociales', function () {
    return view('contacto');
})->name('contacto');

Route::get('/lineas-investigacion', function () {
    return view('/investigacion/lineas');
})->name('lineas');

Route::post('/enviar-formulario', [FormularioController::class, 'enviarFormulario'])->name('enviarFormulario');

Route::get('/articulos', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/articulos/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/buscar', [PostController::class, 'search'])->name('posts.search');
Route::get('/posts/archivo/{archivo}', [PostController::class, 'archivo'])->name('archivo.descargar');

Route::prefix('recursos')->group(function () {
    Route::get('/archivo/{archivo}', [RecursoController::class, 'archivo'])->name('recursos.archivo');
});

Route::resource('recursos', RecursoController::class);

Route::get('/landing', function () {
    return view('landing');
})->name('landing');
