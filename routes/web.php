<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\Dashboard\DashboardController;


 Route::get('/',[DashboardController::class, 'dashboard'])->name('home');

Route::get('/blog',[DashboardController::class, 'blog']);

Route::get('/login',[DashboardController::class, 'login'])->name('login');

//  Route::get('/login',[DashboardController::class, 'login']);













// Route::get('/text', function () {
//     return view('blog');
// });



