<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(){
        return response(Task::select('id','project_id','title','status')->get(),200);
    }

    public function store(Request $request){
        $task=Task::create($request->only('project_id','title','status'));
        return response(compact('task'),201);
    }

    public function update($id,Request $request){
        $task=Task::find($id);
        $task->update($request->only('project_id','title','status'));
        return response('Success',201);
    }

    public function delete($id){
        $task=Task::find($id);
        $task->delete();
        return response('Deleted',201);
    }
}
