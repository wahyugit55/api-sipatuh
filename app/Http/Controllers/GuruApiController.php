<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru; // Import model Guru
use Illuminate\Validation\ValidationException;

class GuruApiController extends Controller
{
    public function index()
    {
        try {
            // Mengambil semua data guru
            $guru = Guru::all();

            // Jika tidak ada data guru
            if ($guru->isEmpty()) {
                return response()->json(['message' => 'Data guru tidak ditemukan'], 404);
            }

            // Mengembalikan data dalam bentuk JSON
            return response()->json($guru);
        } catch (\Exception $e) {
            // Tangani error lainnya
            return response()->json(['error' => 'Terjadi kesalahan server'], 500);
        }
    }
    
    public function store(Request $request)
    {
        try {
            // Validasi input
            $this->validate($request, [
                'nip' => 'required|unique:guru',
                'nama' => 'required',
                'jabatan' => 'required',
                'kelas_id' => 'required|exists:kelas,id',
                'nomor_hp' => 'required',
            ]);

            // Simpan data ke dalam tabel guru
            $guru = new Guru();
            $guru->nip = $request->nip;
            $guru->nama = $request->nama;
            $guru->jabatan = $request->jabatan;
            $guru->kelas_id = $request->kelas_id;
            $guru->nomor_hp = $request->nomor_hp;
            $guru->save();

            // Return response dalam bentuk JSON
            return response()->json(['message' => 'Data guru berhasil disimpan'], 201);
        } catch (ValidationException $e) {
            // Tangani error validasi
            return response()->json(['error' => $e->errors()], 400);
        } catch (\Exception $e) {
            // Tangani error lainnya
            return response()->json(['error' => 'Terjadi kesalahan server'], 500);
        }
    }
}
