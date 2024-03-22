<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WaliMurid;
use Illuminate\Http\Request;

class WaliMuridApiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $keyword = $request->query('search');
            $waliMurids = WaliMurid::with(['siswa', 'kelas'])->when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%")
                             ->orWhereHas('siswa', function ($query) use ($keyword) {
                                 $query->where('nama', 'like', "%{$keyword}%");
                             });
            })->get();

            return response()->json([
                'success' => true,
                'data' => $waliMurids
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
