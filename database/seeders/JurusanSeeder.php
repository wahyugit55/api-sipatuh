<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // List of jurusans
        $jurusans = [
            ['nama' => 'Teknik Informatika'],
            ['nama' => 'Sistem Informasi'],
            ['nama' => 'Teknik Elektro'],
            ['nama' => 'Teknik Mesin'],
            ['nama' => 'Teknik Industri']
        ];

        // Insert data into the table
        foreach ($jurusans as $jurusan) {
            DB::table('jurusans')->insert([
                'nama' => $jurusan['nama'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
