<?php

namespace App\Http\Controllers\web\Dashboard;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    function index(){
        $tasks = Task::get();
    
            return view('frontend.app', compact('tasks'));
    }

    function create(){
         $tasks = Task::all(); 
        return view('frontend.todo',compact('tasks'));
    }

    function store(Request $request){

        $validate = $request->validate([
            'task_name' => "required|string|max:20"
        ]);





        $task = Task::create([
            'task_name' => $request-> task_name, 
            'ip_address' => "7327374"
        ]);

        return redirect()->route('home');
    }

    
}
