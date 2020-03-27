<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller {


    public function mytask() {
        return view('task');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tasks = Task::all();
        return response()->json([
            'tasks'    => $tasks,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name'        => 'required|max:255',
            'description' => 'required',
        ]);
    
        $task = Task::create([
            'name'        => $request->name,
            'description' => $request->description,
            'user_id'     => 1,
        ]);
    
        return response()->json([
            'task'    => $task,
            'message' => 'Success'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'name'        => 'required|max:255',
            'description' => 'required',
        ]);

        $task->name         = $request->name;
        $task->description  = $request->description;
        $task->save();

        return response()->json([
            'message' => 'Task updated successfully!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $task->delete();
        return response()->json([
            'message' => 'Task deleted successfully!'
        ], 200);
    }
}
