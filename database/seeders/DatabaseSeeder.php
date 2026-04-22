<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisSurat;
use App\Models\Prodi;
use App\Models\Golongan;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /** * Seed the application's database. */
    public function run(): void
    {
        JenisSurat::create([
            'nama_surat' => 'Surat Izin Sakit',
            'kode_surat' => 'SIS-01' // Tambahkan kode unik di sini
        ]);
        JenisSurat::create([
            'nama_surat' => 'Surat Izin Kegiatan di Luar Kampus',
            'kode_surat' => 'SIK-LK'
        ]);
        JenisSurat::create([
            'nama_surat' => 'Surat Izin Kegiatan Kampus',
            'kode_surat' => 'SIK-K'
        ]);

        $this->call([
            MasterSeeder::class,
            UserSeeder::class,
        ]);
        $prodis = [
            'Teknik Informatika',
            'Teknik Komputer',
            'Manajemen Informatika',
            'Teknologi Rekayasa Komputer',
            'Teknologi Rekayasa Perangkat Lunak'
        ];
        foreach ($prodis as $p) {
            Prodi::create(['nama_prodi' => $p]);
        }
        $golongans = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
        foreach ($golongans as $g) {
            Golongan::create(['nama_golongan' => $g]);
        }

        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
