<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run()
{
    $gurus = [
        ['nip' => '123456', 'nama' => 'Guru Satu', 'jabatan' => 'Wali Kelas', 'kelas_id' => 3, 'nomor_hp' => '081234567890'],
        ['nip' => '234567', 'nama' => 'Guru Dua', 'jabatan' => 'Guru Matematika', 'kelas_id' => 2, 'nomor_hp' => '082345678901'],
        ['nip' => '345678', 'nama' => 'Guru Tiga', 'jabatan' => 'Guru Bahasa Inggris', 'kelas_id' => null, 'nomor_hp' => '083456789012']
    ];

    foreach ($gurus as $guru) {
        \App\Models\Guru::create($guru);
    }
}
}
