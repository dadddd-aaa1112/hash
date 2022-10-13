<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\GroupStoreRequest;
use App\Http\Requests\Task\StoreRequest;
use App\Jobs\ProcessTask;
use App\Models\Algorithm;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\TaskService;

class TaskController extends Controller
{
    public $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function store(StoreRequest $storeRequest)
    {
        $dataValidate = $storeRequest->validated();
        $data = array();
        foreach ($dataValidate as $key => $value) {
            $item = preg_replace("/[0-9]+/", '', $key);
            $data[$item] = $value;
        }

        $this->dispatch(new ProcessTask($data));

        return redirect()->route('index');
    }

    public function redirectToGroup()
    {
        $algorithms = Algorithm::all();
        $tasks = Task::all();

        return view('task.group', [
            'algorithms' => $algorithms,
            'tasks' => $tasks
        ]);
    }

    public function storeGroup(GroupStoreRequest $groupStoreRequest)
    {
        $dataValidate = $groupStoreRequest->validated();

        for ($i = 0; $i < 3; $i++) {
            $arr = array_slice($dataValidate, 0, 5);
            $data = array();
            foreach ($arr as $key => $value) {
                $item = preg_replace("/[0-9]+/", '', $key);
                $data[$item] = $value;
            }
            $this->dispatch(new ProcessTask($data));
            array_splice($dataValidate, 0, 5);
        }

        return redirect()->route('group.redirect');
    }


}
