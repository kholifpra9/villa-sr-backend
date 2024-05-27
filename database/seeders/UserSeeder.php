<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'nama' => 'Kholif',
                    'username' => 'kholifaja',
                    'email' => 'kholif@gmail.com',
                    'password' => 'password',
                    'alamat' => 'Cikaret'
                ],
                [
                    'nama' => 'Munaroh',
                    'username' => 'Munarohh',
                    'email' => 'munaroh@gmail.com',
                    'password' => 'password',
                    'alamat' => 'Cikanjut'
                ],
            ]
        );
    }
}
