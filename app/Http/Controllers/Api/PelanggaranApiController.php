<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelanggaranApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $pelanggarans = Pelanggaran::with(['siswa', 'kelas', 'jenis_pelanggaran'])->get();

            return response()->json([
                'success' => true,
                'data' => $pelanggarans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        try {
            $pelanggarans = Pelanggaran::with(['siswa', 'kelas', 'jenis_pelanggaran'])
                            ->where('detail', 'like', '%' . $keyword . '%')
                            ->orWhereHas('siswa', function ($query) use ($keyword) {
                                $query->where('nama', 'like', "%$keyword%");
                            })
                            ->get();

            return response()->json([
                'success' => true,
                'data' => $pelanggarans
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error during the search',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'siswa_id' => 'required|exists:siswas,id',
            'siswa_kelas_id' => 'required|exists:kelas,id',
            'tanggal' => 'required|date',
            'jenis_id' => 'required|exists:jenis_pelanggarans,id',
            'detail' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $pelanggaran = new Pelanggaran();
            $pelanggaran->siswa_id = $request->siswa_id;
            $pelanggaran->siswa_kelas_id = $request->siswa_kelas_id;
            $pelanggaran->tanggal = $request->tanggal;
            $pelanggaran->jenis_id = $request->jenis_id;
            $pelanggaran->detail = $request->detail;
            $pelanggaran->save();

            return response()->json([
                'success' => true,
                'message' => 'Pelanggaran successfully added',
                'data' => $pelanggaran
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to add pelanggaran',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
