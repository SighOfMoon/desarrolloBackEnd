<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private static $order = 1;

    public function run()
    {
        $data = [
            ['fila' => 1, 'valor' => 7],
            ['fila' => 2, 'valor' => 4],
            ['fila' => 3, 'valor' => 9],
            ['fila' => 4, 'valor' => 2],
        ];

        DB::table('numeros')->insert($data);
    }
}
