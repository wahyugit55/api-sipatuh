<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; // Nama tabel
    protected $fillable = ['nip', 'nama', 'jabatan', 'kelas_id', 'nomor_hp']; // Kolom yang dapat diisi

    public $timestamps = false;
}
