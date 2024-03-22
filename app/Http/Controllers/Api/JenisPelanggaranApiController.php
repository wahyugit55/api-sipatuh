<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JenisPelanggaran;
use Illuminate\Http\Request;

class JenisPelanggaranApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $jenisPelanggarans = JenisPelanggaran::when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%");
            })->get();

            return response()->json([
                'success' => true,
                'data' => $jenisPelanggarans
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
