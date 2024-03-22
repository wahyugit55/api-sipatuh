<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis', 'nama', 'jenis_kelamin', 'kelas_id', 'alamat'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
