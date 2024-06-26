<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nip', 'nama', 'jabatan', 'kelas_id', 'nomor_hp'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
