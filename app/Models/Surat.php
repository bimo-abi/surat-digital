<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = ['pemohon_id', 'jenis_surat_id', 'nomor_surat', 'keperluan', 'status'];

    public function pemohon()
    {
        return $this->belongsTo(User::class, 'pemohon_id');
    }

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}
