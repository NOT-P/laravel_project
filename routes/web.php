<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\Dashboard\DashboardController;


Route::get('/',[DashboardController::class, 'dashboard']);


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('');
// });



