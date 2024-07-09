<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'jenis_id',
        'content',
        'image',
        'comments_id',
        'create_by',
    ];

    protected $table = 'blogs';

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
