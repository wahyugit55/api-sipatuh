<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaliMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $waliMurids = [
            ['nama' => 'Bapak Siswa Satu', 'siswa_id' => 1, 'siswa_kelas_id' => 4, 'status' => 'Ayah', 'nomor_hp' => '081234567890'],
            ['nama' => 'Ibu Siswa Dua', 'siswa_id' => 2, 'siswa_kelas_id' => 2, 'status' => 'Ibu', 'nomor_hp' => '081234567891'],
            ['nama' => 'Bapak Siswa Tiga', 'siswa_id' => 3, 'siswa_kelas_id' => 3, 'status' => 'Ayah', 'nomor_hp' => '081234567']
        ];

        foreach ($waliMurids as $walimurid) {
            \App\Models\WaliMurid::create($walimurid);
        }
    }
}
