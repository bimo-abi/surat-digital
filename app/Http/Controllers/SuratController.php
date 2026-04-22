<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    // 1. Tampilkan daftar surat yang pernah dibuat si mahasiswa
    public function index()
    {
        $surats = Surat::with('jenisSurat')->where('pemohon_id', Auth::id())->get();
        return view('surat.index', compact('surats'));
    }

    // 2. Tampilkan halaman form buat surat baru
    public function create()
    {
        $jenisSurats = JenisSurat::all(); // Ambil pilihan surat (Surat Izin, Keterangan, dll)
        return view('surat.create', compact('jenisSurats'));
    }

    // 3. Simpan data dari form ke database
    public function store(Request $request)
    {
        $request->validate(
            [
                'jenis_surat_id' => 'required|exists:jenis_surats,id',
                'keperluan'      => 'required|string|min:10',
            ],
        );
        // 2. EKSEKUSI (Mata Kuliah: PBO - Objek Persistence)
        // Menggunakan mass assignment untuk membuat record baru
        Surat::create([
            'pemohon_id'     => Auth::id(), // Mengambil session ID user yang login
            'jenis_surat_id' => $request->jenis_surat_id,
            'keperluan'      => trim($request->keperluan), // trim untuk hapus spasi di awal/akhir
            'status'         => 'tertunda',
        ]);
        // 3. RESPONSE
        // Membawa 'flash session' untuk notifikasi di frontend nanti
        return redirect()->route('surat.index')->with('success', 'Surat berhasil diajukan! Silakan tunggu verifikasi admin.');
    }
}
