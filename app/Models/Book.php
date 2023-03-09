<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "book_category_id",
        "title",
        "author",
        "description",
        "image",
        "language",
        "word_count",
        "download_link"
    ];

    public function book_category()
    {
        return $this->belongsTo(BookCategory::class);
    }
}
