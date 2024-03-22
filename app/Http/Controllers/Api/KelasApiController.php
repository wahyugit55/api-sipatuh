<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $kelas = Kelas::with(['tingkat', 'jurusan'])
                        ->when($keyword, function ($query, $keyword) {
                            return $query->where('nama', 'like', "%" . $keyword . "%");
                        })->get();

            return response()->json([
                'success' => true,
                'data' => $kelas
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
