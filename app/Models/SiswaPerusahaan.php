<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPerusahaan extends Model
{
    use HasFactory;
    protected $table = 'siswa_perusahaan';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
    protected $casts   = [
        'periode'    => 'array'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function perusahaan()
    {
        return $this->belongsTo(JurusanPerusahaan::class);
    }
}
