<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeareaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('projectes', ProyectoController::class);
    Route::get('/viewproyects', [ProyectoController::class, 'index'])->name('viewproyects');
    Route::get('manageproyect/{id}',[ProyectoController::class,'show'])->name('manageproyect');
    Route::get('manageproyect/{id}', [TeareaController::class, 'show'])->name('manageproyect');
    Route::post('/proyectos/{proyecto}/tasques', [TeareaController::class, 'store'])->name('tareas.store');
    Route::get('/proyectos/{proyecto}/createtask', [TeareaController::class, 'create'])->name('createtask');
});

//return the create proyectview
Route::get('/createproyect',function(){
    return view ('createproyect');
})->middleware(['auth', 'verified'])->name('createproyect');

require __DIR__.'/auth.php';
