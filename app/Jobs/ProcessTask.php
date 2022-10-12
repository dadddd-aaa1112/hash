<?php

namespace App\Jobs;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Algorithm;
use App\Models\Status;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessTask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $data;

    public function __construct( $data)
    {

        $this->data = $data;
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $this->data['status_id'] = Status::status('completed')->first()->id;;
        $hash = Algorithm::algorithm($this->data['algorithm_id'])->first()->code;
        $resString = hash($hash, $this->data['orig_row']);

        if ($this->data['count_repet'] >= 1) {
            for ($i = 1; $i <= $this->data['count_repet']; $i++) {
                sleep($this->data['update_freq'] / 1000);
                $resString .= ' ' . hash($hash, $resString) . '_' . $this->data['salt'];
            }
        }
        $result = $resString;
        $this->data['convert_row'] = $result;
        $task = Task::firstOrCreate(
            $this->data
        );
    }


}
