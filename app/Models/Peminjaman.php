<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjamans";
    protected $fillable = [
        'jp',
        'buku_id'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class, 'buku_id', 'id');
    }
}