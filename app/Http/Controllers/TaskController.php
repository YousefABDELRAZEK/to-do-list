<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
       $tasks = Task::all();
       return view('home',compact('tasks'));
    }

    
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData =$request->validate(['task'=>'required|string|max:225']);
        Task::create($validatedData);
        return redirect()->route('tasks.index');

    }
    public function update(Request $request, string $id)
    {
        
      
       $task = Task::find($id);
       $task->completed = $request->has('completed');
       $task->save();
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');

    }
}
