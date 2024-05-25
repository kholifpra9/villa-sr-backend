<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('villas')->insert([
            [
                'nama_villa' => 'SR 1',
                'tipe' => 'Private Pool',
                'Deskripsi' => 'lorem ipsum Private Pool',
                'lokasi' => 'Cipanas',
                'harga' => '1200000',
                'gambar' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQMgb5j_Xe1lFOwpsN8XnuMyYGNNtF7EKztXl2BUuVop3nwfLiX'
            ],
            [
                'nama_villa' => 'SR 2',
                'tipe' => 'Shared Pool',
                'Deskripsi' => 'lorem ipsum Shared Pool',
                'lokasi' => 'Cipamingkis',
                'harga' => '900000',
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRvt6T9bSht6IOht_ZLKPglYx89Db3pmtoTosagmAJeg&s'
            ],
            [
                'nama_villa' => 'Glamping 1 Cipamingkis',
                'tipe' => 'Glamping',
                'Deskripsi' => 'lorem ipsum Glamping',
                'lokasi' => 'Cisarua',
                'harga' => '700000',
                'gambar' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQMgb5j_Xe1lFOwpsN8XnuMyYGNNtF7EKztXl2BUuVop3nwfLiX'
            ],
        ],
        );
    }
}
