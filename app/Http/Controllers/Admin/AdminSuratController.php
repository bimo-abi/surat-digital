<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat; // Pastikan Model Surat sudah di-import
use Illuminate\Http\Request;

class AdminSuratController extends Controller
{
    // 1. Fungsi untuk menampilkan daftar surat masuk ke Admin
    public function index()
    {
        // Mengambil semua surat + data user + data jenis surat
        $surats = Surat::with(['user.detailPengguna', 'jenisSurat'])->latest()->get();
        return view('admin.surat-masuk-admin', compact('surats'));
    }

    // 2. FUNGSI VERIFIKASI (UPDATE)
    public function updateStatus(Request $request, $id)
    {
        // Validasi agar status yang masuk hanya 'disetujui' atau 'ditolak'
        $request->validate([
            'status' => 'required|in:disetujui,ditolak',
        ]);

        // Cari surat berdasarkan ID, jika tidak ada munculkan error 404
        $surat = Surat::findOrFail($id);

        // Update kolom status di database
        $surat->update([
            'status' => $request->status
        ]);

        // Kirim pesan sukses ke halaman sebelumnya
        return back()->with('success', 'Surat mahasiswa berhasil diverifikasi!');
    }
}