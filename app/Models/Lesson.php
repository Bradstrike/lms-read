<?php

namespace App\Models;

use App\Http\Livewire\App\Manage\Branches\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'thumbnail', 'price', 'tags', 'state'];

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }  

}
