<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\Dashboard\DashboardController;


Route::get('/',[DashboardController::class, 'dashboard']);

Route::get('/blog',[DashboardController::class, 'blog']);















// Route::get('/text', function () {
//     return view('blog');
// });



