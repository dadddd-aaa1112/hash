<?php

namespace Database\Seeders;

use App\Models\Algorithm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlgorithmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $algorithms = [
            [
                'MD2',
                'md2'
            ],
            [
                'MD4',
                'md4'
            ],
            [
                'MD5',
                'md5'
            ],
            [
                'SHA-1',
                'sha1'
            ],
            [
                'SHA-2',
                'sha2'
            ],
            [
                'SHA-3',
                'sha3'
            ],
        ];

        foreach ($algorithms as $algorithm) {
            $item = new Algorithm();
            $item->title = $algorithm[0];
            $item->code = $algorithm[1];
            $item->save();
        }
    }
}
