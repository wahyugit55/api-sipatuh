<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardApiController extends Controller
{
    public function totalStudents()
    {
        $count = Siswa::count();
        return response()->json(['total_students' => $count]);
    }

    public function totalViolations()
    {
        $count = Pelanggaran::count();
        return response()->json(['total_violations' => $count]);
    }

    public function violationsByDay()
    {
        $count = Pelanggaran::whereDate('tanggal', now())->count();
        return response()->json(['violations_today' => $count]);
    }

    public function violationsByCategory()
    {
        $data = Pelanggaran::join('jenis_pelanggarans', 'pelanggarans.jenis_id', '=', 'jenis_pelanggarans.id')
                           ->select('jenis_pelanggarans.nama as category', DB::raw('count(*) as violations'))
                           ->groupBy('jenis_id')
                           ->get();
        return response()->json(['category_data' => $data]);
    }

    public function todaysViolationsByCategory()
    {
        $data = Pelanggaran::join('jenis_pelanggarans', 'pelanggarans.jenis_id', '=', 'jenis_pelanggarans.id')
                           ->select('jenis_pelanggarans.nama as category', DB::raw('count(*) as violations'))
                           ->whereDate('pelanggarans.tanggal', now())
                           ->groupBy('jenis_id')
                           ->get();
        return response()->json(['today_category_data' => $data]);
    }

    public function violationsPerClass()
    {
        $data = Pelanggaran::join('kelas', 'pelanggarans.siswa_kelas_id', '=', 'kelas.id')
                           ->select('kelas.nama as class', DB::raw('count(*) as violations'))
                           ->groupBy('siswa_kelas_id')
                           ->get();
        return response()->json(['violations_per_class' => $data]);
    }
}
