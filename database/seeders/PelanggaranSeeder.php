<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $pelanggarans = [
        [
            'siswa_id' => 1, // Ganti dengan ID siswa yang valid dari tabel 'siswas'
            'siswa_kelas_id' => 4, // Ganti dengan ID kelas yang valid dari tabel 'kelas'
            'tanggal' => now(),
            'jenis_id' => 1, // Ganti dengan ID jenis pelanggaran yang valid dari tabel 'jenis_pelanggarans'
            'detail' => 'Melanggar aturan seragam'
        ],
        [
            'siswa_id' => 2, // Pastikan siswa ini ada dalam database Anda
            'siswa_kelas_id' => 3, // Pastikan kelas ini ada dalam database Anda
            'tanggal' => now(),
            'jenis_id' => 2, // Pastikan jenis pelanggaran ini ada dalam database Anda
            'detail' => 'Terlambat masuk sekolah'
        ],
        [
            'siswa_id' => 3, // Pastikan siswa ini ada dalam database Anda
            'siswa_kelas_id' => 2, // Pastikan kelas ini ada dalam database Anda
            'tanggal' => now(),
            'jenis_id' => 3, // Pastikan jenis pelanggaran ini ada dalam database Anda
            'detail' => 'Menggunakan handphone saat pelajaran'
        ]
    ];

    foreach ($pelanggarans as $pelanggaran) {
        \App\Models\Pelanggaran::create($pelanggaran);
    }
    
}

}
