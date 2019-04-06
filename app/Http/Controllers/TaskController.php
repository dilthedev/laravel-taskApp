<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request){

        $this->validate($request,['task'=>'required|max:100|min:5',]);

        //dd($request->all());
        $task = new Task;
        $task->task=$request->task; //assigning this task into previous defined requested task
        $task->save(); //save task into database

        $data = Task::all(); //put all data into $data array/variable
        //dd($data);

        return view('/task')->with('tasks',$data);

        //return redirect()->back(); //returning previous page/location
        // return view('/home'); -> returning to specific papge
    }

public function UpdateTaskAsCompleted($id){
    $task = Task::find($id);
    $task->isCompleted = 1;
    $task->save();

    return redirect()->back();
}

public function UpdateTaskAsNotCompleted($id){
    $task = Task::find($id);
    $task->isCompleted = 0;
    $task->save();

    return redirect()->back();
}

public function deleteTask($id){
    $task = Task::find($id);
    $task->delete();
    return redirect()->back();
}


public function updateTaskView($id){
    $task = Task::find($id);



    return view('updatetask')->with('taskdata',$task);

    // $task->update();
    // return redirect()->back();
}

}
