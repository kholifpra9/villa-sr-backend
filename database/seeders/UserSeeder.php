<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                    'password' => Hash::make('password'),
                    'alamat' => 'Cikaret',
                    'notelp' => '089644592349'
                ],
                [
                    'nama' => 'Munaroh',
                    'username' => 'Munarohh',
                    'email' => 'munaroh@gmail.com',
                    'password' => Hash::make('password'),
                    'alamat' => 'paskal',
                    'notelp' => '0088996655'
                ],
            ]
        );
    }
}
