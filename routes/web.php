<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\Dashboard\TaskController;
use App\Models\task;

Route::get('/',[TaskController::class, 'index'])->name('home');
Route::get('/task/add',[TaskController::class, 'create'])->name('task.add');
Route::post('/task/store',[TaskController::class, 'store'])->name('task.submit');


Route::get('/dashboard', function () {
    
    $user = auth()->user();

    return view('backend.layouts.dashboard',compact('user'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
