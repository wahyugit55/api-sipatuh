<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $fillable = ['siswa_id', 'siswa_kelas_id', 'tanggal', 'jenis_id', 'detail'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'siswa_kelas_id');
    }

    public function jenis_pelanggaran()
    {
        return $this->belongsTo(JenisPelanggaran::class, 'jenis_id');
    }
}
