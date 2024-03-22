<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $jenisPelanggarans = [
        ['nama' => 'Pelanggaran Ringan', 'poin' => 10, 'sanksi' => 'Teguran Lisan'],
        ['nama' => 'Pelanggaran Sedang', 'poin' => 20, 'sanksi' => 'Teguran Tertulis'],
        ['nama' => 'Pelanggaran Berat', 'poin' => 30, 'sanksi' => 'Pemanggilan Orang Tua']
    ];

    foreach ($jenisPelanggarans as $jp) {
        \App\Models\JenisPelanggaran::create($jp);
    }
}

}
