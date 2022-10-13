<?php

namespace App\Http\Controllers;

use App\Models\Algorithm;
use App\Models\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $algorithms = Algorithm::all();
        $tasks = Task::all();

        return view('main',
            [
                'algorithms' => $algorithms,
                'tasks' => $tasks,
            ]);
    }
}
