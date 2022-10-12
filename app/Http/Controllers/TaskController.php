<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        $data['status_id'] = 1;

        $task = Task::firstOrCreate(
                $data
            );

        return redirect()
            ->route('index');
    }


}
