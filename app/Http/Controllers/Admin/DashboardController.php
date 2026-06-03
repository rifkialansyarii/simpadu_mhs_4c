<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard_admin');
    }

    public function data_mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.data_mahasiswa', compact('mahasiswa'));
    }
    
    public function data_proyeks($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        if ($mahasiswa) {
            return view('admin.data_mahasiswa', compact('mahasiswa'));
            return response()->json([
                'status' => 'success',
                'message' => 'Data mahasiswa ditemukan',
                'data' => $mahasiswa
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data mahasiswa tidak ditemukan'
            ], 404);
        }
    }
}
