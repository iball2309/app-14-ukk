<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'cover',
        'kategori_id',
        'stock',
    ];
    public function kategories()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}