<?php

namespace App\Http\Controllers\web\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        return view('backend.layouts.dashboard');
    }

    function blog(){
        return view('backend.layouts.blog');
    }
    

    

 }
