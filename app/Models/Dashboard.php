<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'buku_id',
        'peminjam_id'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class, 'buku_id', 'id');
    }
    public function peminjamans()
    {
        return $this->belongsTo(Peminjaman::class, 'peminjam_id', 'id');
    }
}