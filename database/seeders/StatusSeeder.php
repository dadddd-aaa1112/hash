<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'Завершено',
                'completed'
            ],
            [
                'Не завершено',
                'not completed'
            ],
            [
                'Ошибка',
                'error'
            ],
            [
                'В процессе',
                'process'
            ]
        ];

        foreach ($statuses as $status) {
            $item = new Status();
            $item->title = $status[0];
            $item->status = $status[1];
            $item->save();
        }
    }
}
