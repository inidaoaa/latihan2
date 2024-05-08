<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warga::insert ([
            'nama' =>  'daffa',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);

        Warga::insert ([
            'nama' =>  'siska',
            'jenis_kelamin' => 1,
            'alamat' => 'TCI',
        ]);

        Warga::insert ([
            'nama' =>  'umar',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);

        Warga::insert ([
            'nama' =>  'rendi',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);

        Warga::insert ([
            'nama' =>  'apud',
            'jenis_kelamin' => 0,
            'alamat' => 'TCI',
        ]);
    }
}