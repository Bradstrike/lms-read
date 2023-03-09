<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $table = "book_categories";

    protected $fillable = [
        "title",
        "description",
        "sort"
    ];

    public function classroom()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
