<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    // Versi MasterSeeder yang disesuaikan dengan database standar
    public function run(): void
    {
        // 1. Data Prodi
        \App\Models\Prodi::create(['nama_prodi' => 'Teknik Informatika', 'kode_prodi' => 'TI']);
        \App\Models\Prodi::create(['nama_prodi' => 'Sistem Informasi Bisnis', 'kode_prodi' => 'SIB']);

        // 2. Data Golongan
        \App\Models\Golongan::create(['nama_golongan' => 'I/A']);
        \App\Models\Golongan::create(['nama_golongan' => 'III/B']);

        // 3. Data Jenis Surat (Hapus jalur_template jika tidak ada di migration)
        \App\Models\JenisSurat::create([
            'nama_surat' => 'Surat Izin Cuti',
            'kode_surat' => 'SIC',
        ]);
    }
}
