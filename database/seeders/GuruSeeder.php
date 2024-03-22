<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Guru::create([
                'nip' => 'NIP-' . $i,
                'nama' => 'Guru ' . $i,
                'jabatan' => 'Pengajar',
                'kelas_id' => rand(1, 5), // Ganti dengan id kelas yang sesuai
                'nomor_hp' => '0812345678' . $i,
            ]);
        }
    }
}
