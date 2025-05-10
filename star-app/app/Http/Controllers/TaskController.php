<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller{
    public function index(){
        $tasks = Task::orderBy('due_date')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function done(){
        $tasks = Task::where('status', 'Done')->get();
        return view('/tasks/done', compact('tasks'));
    }

    public function onProgress(){
        $tasks = Task::where('status', 'Inprogress')->get();
        return view('/tasks/onprogress', compact('tasks'));
    }

    public function todo(){
        $tasks = Task::where('status', 'Todo')->get();
        return view('/tasks/todo', ['tasks' => $tasks]);
    }

    public function delete($id){
        $task = Task::findOrFail($id);
        $task->delete();
            return redirect('/');
    }
        public function dueTasks(){
            $tasks = Task::where('status', '!=', 'Done')->whereNotNull('due_date')->get();
            return view('/tasks/due', compact('tasks'));
        }
        
        public function store(Request $request){
            $validatedData= $request->validate([
        'title' => ['required'],
        'due_date' => ['required'],
        'status' =>['required'],
        'assigned_to' => ['required'],
        'due_date' => ['required']
    ]);
        Task::create($validatedData);
        return redirect('/');
}


        public function create(){
        $users = User::all();
        return view('/tasks/create', compact('users'));
}

public function aonprogress($id){
$task = Task::findOrFail($id);
$task->status='Inprogress';
$task->save();
return redirect('/');
}
public function adone($id) {
    $task = Task::findOrFail($id);
    $task->status='Done';
    $task->save();
    return redirect('/');
    }

}
