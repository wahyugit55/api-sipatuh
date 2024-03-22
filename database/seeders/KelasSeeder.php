<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $kelas = [
        ['nama' => 'X-RPL-1', 'tingkat_id' => 1, 'jurusan_id' => 1],
        ['nama' => 'X-RPL-2', 'tingkat_id' => 1, 'jurusan_id' => 1],
        ['nama' => 'X-RPL-3', 'tingkat_id' => 1, 'jurusan_id' => 1],
        ['nama' => 'XI-TKJ-1', 'tingkat_id' => 2, 'jurusan_id' => 2]
    ];

    foreach ($kelas as $kls) {
        \App\Models\Kelas::create($kls);
    }
}

}
