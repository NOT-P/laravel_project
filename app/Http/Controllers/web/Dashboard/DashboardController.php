<?php

namespace App\Http\Controllers\web\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
       $user = User::first();
        return view('backend.layouts.dashboard', compact('user')) ;
    }

    function blog(){
        return view('backend.layouts.blog');
    }

    function login(){
        return view('backend.auth.login');
    }
    

    

 }
