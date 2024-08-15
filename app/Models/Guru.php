<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    
    public function perusahaan()
    {
        return $this->hasMany(JurusanPerusahaan::class);
    }
}
