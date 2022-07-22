<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $task = Task::all();
        // dd($task);
        return view ('welcome', ['Tasks' => $task]);
    } 
}
