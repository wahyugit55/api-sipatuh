<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tingkat;
use Illuminate\Http\Request;

class TingkatApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $tingkats = Tingkat::when($keyword, function ($query, $keyword) {
                return $query->where('tingkat', 'like', "%{$keyword}%");
            })->get();

            return response()->json([
                'success' => true,
                'data' => $tingkats
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
