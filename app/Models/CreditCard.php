<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $table = "creditcards";

    protected $fillable = [
        "branch_id",
        "name",
        "holder_name",
        "card_number",
        "month",
        "year",
        "cvv"
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
