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
            'task_name' => "required|string|max:200"
        ]);





        $task = Task::create([
            'task_name' => $request-> task_name, 
            'ip_address' => "7327374"
        ]);

        return redirect()->route('home');
    }

    function toggle($id){
        $task = Task::find($id);
        if(!$task){
            abort(200,"Task not found");
        }
        $task->update([
            'status' => "complete"
        ]);
        $task->save();

        return redirect()->route('home');

    }


//     public function toggle($id){

//     $task = Task::find($id);
//     if (!$task) {
//         abort(200, "Task not found");
//     }

    
//     $task->status = $task->status === 'pending' ? 'complete'  : 'pending';
//     $task->save();

//     return redirect()->route('home');
// }






    function destroy($id ){
        
        $task = Task::find($id);
        if(!$task){
            dd("task no found");
        }
        $task->delete();
        return redirect()->route('home');
    }

    

    
}
