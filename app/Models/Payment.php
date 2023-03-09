<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	use HasFactory;

	protected $fillable = ['causer', 'lesson_id', 'method', 'price', 'state', 'oid', 'causer_type'];

	public function lesson()
	{
		return $this->belongsTo(Lesson::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'causer', 'id');
	}

	public function branch()
	{
		return $this->belongsTo(Branch::class, 'causer', 'id');
	}

}
