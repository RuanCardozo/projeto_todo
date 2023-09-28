<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

    }

    public function create(Request $request){
        $categories = Category::all();

        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function edit(Request $request){
        $id = $request->id;

        $task = Task::find($id);
        if(!$task){
            return redirect(route('home'));
        }

        $categories = Category::all();

        $data['categories'] = $categories;

        $data['task'] = $task;

        return view('tasks.edit', $data);
    }

    public function edit_action(Request $request){

        $request_date = $request->only(['title', 'due_date', 'category_id', 'description']);

        $task = Task::find($request->id);
        if(!$task){
            return 'erro de task não existente';
        }
        $task->update($request_date);
        $task->save();
        return redirect(route('home'));

    }


    public function delete(Request $request){
        return redirect(route('home'));
    }
}
