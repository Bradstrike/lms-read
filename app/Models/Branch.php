<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",            //
        "address",          //
        "name",
        "surname",
        "phone",
        "email",
        "tax_department",   //
        "tax_number",       //
        "balance",
        "ppn"
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function creditcards()
    {
        return $this->hasMany(CreditCard::class);
    }
}
