<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskDetailController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id) {
        // $task = Task::all();
        // dd($id);
        return view ('taskDetail', ['id' => $id]);
    } 
}
