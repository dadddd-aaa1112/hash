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
                'SHA-224',
                'sha224'
            ],
            [
                'SHA-256',
                'sha256'
            ],
            [
                'SHA-384',
                'sha384'
            ],
            [
                'SHA-512',
                'sha512'
            ],
            [
                'SHA-3-224',
                'sha3-224'
            ],
            [
                'SHA-3-256',
                'sha3-256'
            ],
            [
                'SHA-3-384',
                'sha3-384'
            ],
            [
                'SHA-3-512',
                'sha3-512'
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
