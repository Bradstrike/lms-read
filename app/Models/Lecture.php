<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = [
        "lesson_id",
        "exercise_id",
        "name",
        "description",
        "icon",
        "config",
        "placement",
    ];



    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    


}
