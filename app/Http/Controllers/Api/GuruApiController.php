<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $gurus = Guru::with(['kelas'])->when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%")
                             ->orWhere('nip', 'like', "%{$keyword}%")
                             ->orWhere('jabatan', 'like', "%{$keyword}%");
            })->get();

            return response()->json([
                'success' => true,
                'data' => $gurus
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
