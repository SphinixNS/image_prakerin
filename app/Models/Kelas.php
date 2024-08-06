<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function konsentrasi()
    {
        return $this->belongsTo(Konsentrasi::class);
    }
}
