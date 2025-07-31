<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'full_name',
        'speciality',
        'phone',
        'email',
        'password',
    ];
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
    public function classe () {
        return $this->hasOne(Classe::class);
    }
}
