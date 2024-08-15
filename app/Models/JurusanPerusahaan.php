<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanPerusahaan extends Model
{
    use HasFactory;
    protected $table = 'jurusan_perusahaan';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
    public function siswa()
    {
        return $this->hasMany(SiswaPerusahaan::class, 'perusahaan_id', 'id');
    }
    public function pembimbing()
    {
        return $this->belongsTo(PembimbingPerusahaan::class, 'id', 'perusahaan_id',);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
   

}

