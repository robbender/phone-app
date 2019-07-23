<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class UserTasksController extends Controller
{
    public function update(Task $task)
    {
        dd($task);
    }
}
