<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPengguna extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'nomor_induk', 'prodi_id', 'golongan_id', 'nomor_telepon', 'alamat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
