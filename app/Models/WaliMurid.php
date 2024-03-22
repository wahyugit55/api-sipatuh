<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    protected $fillable = ['nama', 'siswa_id', 'siswa_kelas_id', 'status', 'nomor_hp'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'siswa_kelas_id');
    }
}
