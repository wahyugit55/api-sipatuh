<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $siswas = [
        ['nis' => '1001', 'nama' => 'Siswa Satu', 'jenis_kelamin' => 'Laki-laki', 'kelas_id' => 4, 'alamat' => 'Alamat Siswa Satu'],
        ['nis' => '1002', 'nama' => 'Siswa Dua', 'jenis_kelamin' => 'Perempuan', 'kelas_id' => 2, 'alamat' => 'Alamat Siswa Dua'],
        ['nis' => '1003', 'nama' => 'Siswa Tiga', 'jenis_kelamin' => 'Laki-laki', 'kelas_id' => 3, 'alamat' => 'Alamat Siswa Tiga']
    ];

    foreach ($siswas as $siswa) {
        \App\Models\Siswa::create($siswa);
    }
}

}
