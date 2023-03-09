<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonDefinition extends Model
{
    use HasFactory;

    protected $table = "json_definitions";

    protected $fillable = ['title', 'content', 'type'];
}
