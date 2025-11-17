<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\task;

Route::get('/', function () {
    $tasks = Task::get();
    
    return view('frontend.app',compact("tasks"));
})->name('home');



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
