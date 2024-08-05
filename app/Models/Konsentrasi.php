<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    use HasFactory;
    protected $table = 'konsentrasi';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
