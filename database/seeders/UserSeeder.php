<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'javier', 'email' => 'javier@gmail.com', 'password' => Hash::make('123456789')],
            ['name' => 'alejandro', 'email' => 'alejan@gmail.com', 'password' => Hash::make('987654321')],
        ];

        DB::table('users')->insert($data);
    }
}
