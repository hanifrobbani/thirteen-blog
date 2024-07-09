<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_jenis',
        
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'jenis_id');
    }
}
