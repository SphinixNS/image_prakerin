<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;
    protected $table = 'pembimbing';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(JurusanPerusahaan::class, 'perusahaan_id', 'id');
    }
}
