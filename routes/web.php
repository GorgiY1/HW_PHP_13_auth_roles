<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'read'])
->name('task.read')->middleware(['auth', 'verified']);


Route::get('/create', [TaskController::class, 'create'])
->name('task.create')->middleware(['auth', 'verified']);
Route::post('/create', [TaskController::class, 'assistant_create'])
->name('task.assistant_create');

Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
