<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mahasiswa::insert([
            [
                'Nim' => '1941720132',
                'Nama' => 'Fayyadh Al Baity',
                'Tanggal_Lahir' => '2000-03-07',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '089515665616',
                'Email' => 'fayyadh33@gmail.com'
            ],
            [
                'Nim' => '1941720123',
                'Nama' => 'Vidella E',
                'Tanggal_Lahir' => '2001-08-24',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '087859123321',
                'Email' => 'VidellaR@gmail.com'
            ],
            [
                'Nim' => '1931710110',
                'Nama' => 'Virana',
                'Tanggal_Lahir' => '2000-03-02',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081156782109',
                'Email' => 'vrnmrth@gmail.com'
            ]
        ]);
    }
}