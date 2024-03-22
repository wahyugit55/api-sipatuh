<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $siswas = Siswa::with(['kelas'])->when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%")
                             ->orWhere('nis', 'like', "%{$keyword}%");
            })->get();

            return response()->json([
                'success' => true,
                'data' => $siswas
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
