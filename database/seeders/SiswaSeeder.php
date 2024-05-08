<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert([
          'nama' => 'Daffa',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Taman Cibaduyut Indah'
        ]);

        Siswa::insert([
          'nama' => 'kehan',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Taman Cibaduyut Indah'
        ]);
        Siswa::insert([
          'nama' => 'Dimasun',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Sekeawi'
        ]);

        Siswa::insert([
          'nama' => 'sopyan',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'baleedah'
        ]);

        Siswa::insert([
          'nama' => 'Mardian',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'ranca'
        ]);

        Siswa::insert([
          'nama' => 'sahwal',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Terate'
        ]);

        Siswa::insert([
          'nama' => 'nadip basamalah',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Sekeawi'
        ]);

        Siswa::insert([
          'nama' => 'Fajar',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Ranca'
        ]);

        Siswa::insert([
          'nama' => 'farel',
          'jenis_kelamin' => 0,
          'umur' => 17,
          'alamat' => 'Ranca'
        ]);

        Siswa::insert([
          'nama' => 'Reni',
          'jenis_kelamin' => 1,
          'umur' => 17,
          'alamat' => 'cangkuang'
        ]);
    }
}