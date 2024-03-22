<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPelanggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'poin',
        'sanksi',
    ];

    // Definisikan relasi ke model Pelanggaran
    public function pelanggarans()
    {
        return $this->hasMany(Pelanggaran::class, 'jenis_id');
    }
}
