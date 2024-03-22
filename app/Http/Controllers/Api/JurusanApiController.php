<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $jurusans = Jurusan::when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%");
            })->get();

            return response()->json([
                'success' => true,
                'data' => $jurusans
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
