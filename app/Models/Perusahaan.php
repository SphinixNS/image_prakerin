<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];


    public function jurusan()
    {
        return $this->hasMany(JurusanPerusahaan::class);
    }
   


}
