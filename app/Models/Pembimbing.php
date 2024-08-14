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
        return $this->hasMany(PembimbingPerusahaan::class, 'pembimbing_id', 'id');
    }
}
