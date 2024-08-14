<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingPerusahaan extends Model
{
    use HasFactory;
    protected $table = 'pembimbing_perusahaan';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(JurusanPerusahaan::class, 'perusahaan_id', 'id');
    }
    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class, 'pembimbing_id', 'id');
    }
}
