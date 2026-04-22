<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratController; 
use App\Http\Controllers\Admin\AdminSuratController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route Dashboard Utama
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route untuk User Terautentikasi
Route::middleware('auth')->group(function () {
    
    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Fitur Surat Sisi Mahasiswa
    Route::resource('surat', SuratController::class);

});
//Route Khusus Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Menampilkan daftar surat masuk
    Route::get('/surat', [AdminSuratController::class, 'index'])->name('surat.index');
    
    // Menggunakan patch karena hanya mengubah satu kolom (status)
    Route::patch('/surat/{id}/status', [AdminSuratController::class, 'updateStatus'])->name('surat.updateStatus');
});
require __DIR__ . '/auth.php';