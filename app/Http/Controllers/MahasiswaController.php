<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.dashboard_mhs', compact('mahasiswa'));
    }

    public function apiIndex()
    {
        $mahasiswa = Mahasiswa::with(['jenisKelamin' => function ($query) {
            $query->select('id_jk', 'nama_jk');
        }])->get(['nim', 'nama', 'id_jk']);
        return response()->json([
            'status' => 'success',
            'message' => 'Daftar mahasiswa berhasil diambil',
            'data' => $mahasiswa
        ]);
    }

    public function apiShow($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        if ($mahasiswa) {
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

    public function apiStore(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|string|unique:mahasiswa',
            'nama' => 'required|string',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        $mahasiswa = Mahasiswa::create($validatedData);
        return response()->json([
            'status' => 'success',
            'message' => 'Mahasiswa berhasil ditambahkan',
            'data' => $mahasiswa
        ], 201);
    }

    public function apiUpdate(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        if ($mahasiswa) {
            $validatedData = $request->validate([
                'nama' => 'sometimes|required|string',
                // Tambahkan validasi untuk field lainnya sesuai kebutuhan
            ]);

            $mahasiswa->update($validatedData);
            return response()->json([
                'status' => 'success',
                'message' => 'Mahasiswa berhasil diperbarui',
                'data' => $mahasiswa
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data mahasiswa tidak ditemukan'
            ], 404);
        }
    }

    public function apiDestroy($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        if ($mahasiswa) {
            $mahasiswa->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Mahasiswa berhasil dihapus'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data mahasiswa tidak ditemukan'
            ], 404);
        }
    }
}
