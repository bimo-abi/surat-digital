<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    public $timestamps = false;
    use HasFactory;
    // Menentukan kolom mana saja yang boleh diisi oleh user
    // Hubungan dengan Basis Data: Menjaga integritas kolom lain agar tidak dimanipulasi
    protected $fillable = [
        'pemohon_id',
        'jenis_surat_id',
        'keperluan',
        'status'
    ];
    // Relasi PBO: Surat ini milik siapa?
    public function user()
    {
        return $this->belongsTo(User::class, 'pemohon_id');
    }

    // Relasi PBO: Apa jenis suratnya?
    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class, 'jenis_surat_id');
    }
}
