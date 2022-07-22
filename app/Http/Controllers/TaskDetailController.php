<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskDetailController extends Controller
{
    public function index () {
        $task = Task::all();
        // dd($task);
        return view ('taskDetail');
    } 
}
