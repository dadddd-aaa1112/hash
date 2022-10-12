<?php

namespace App\Services;

use App\Models\Algorithm;
use App\Models\Status;
use App\Models\Task;

class TaskService
{
    public function hashAlg($data)
    {
        $hash = Algorithm::algorithm($data['algorithm_id'])->first()->code;
        $resString = hash($hash, $data['orig_row']);

        if ($data['count_repet'] >= 1) {
            for ($i = 1; $i <= $data['count_repet']; $i++) {
                sleep($data['update_freq'] / 1000);
                $resString .= ' ' . hash($hash, $resString) . '_' . $data['salt'];
            }
        }
        return $resString;
    }

    public function store($storeRequest)
    {
        $data = $storeRequest->validated();
        $data['status_id'] = Status::status('completed')->first()->id;
        $resString = $this->hashAlg($data);
        $data['convert_row'] = $resString;
        $task = Task::firstOrCreate(
            $data
        );
    }

}
