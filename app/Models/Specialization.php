<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
    ];
}
