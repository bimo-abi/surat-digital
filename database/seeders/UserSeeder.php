<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\DetailPengguna;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // 1. Buat Akun Admin
    $admin = User::create([
        'name' => 'Moch. Bimo Abi Supyan',
        'email' => 'admin@jti.com',
        'password' => Hash::make('password123'),
        'peran' => 'admin',
    ]);

    // Berikan detail untuk Admin
    DetailPengguna::create([
        'user_id' => $admin->id,
        'nomor_induk' => '1941720001', // Contoh NIP
        'nomor_telepon' => '08123456789',
        'alamat' => 'Malang, Jawa Timur'
    ]);

    // 2. Buat Akun Mahasiswa
    $mhs = User::create([
        'name' => 'Bimo Mahasiswa',
        'email' => 'mhs@jti.com',
        'password' => Hash::make('password123'),
        'peran' => 'mahasiswa',
    ]);

    // Berikan detail untuk Mahasiswa (Hubungkan ke Prodi TI yang kita buat di MasterSeeder)
    DetailPengguna::create([
        'user_id' => $mhs->id,
        'nomor_induk' => '2241720002', // Contoh NIM
        'prodi_id' => 1, // ID 1 biasanya Teknik Informatika
        'nomor_telepon' => '08987654321',
        'alamat' => 'Polinema'
    ]);
}
}
