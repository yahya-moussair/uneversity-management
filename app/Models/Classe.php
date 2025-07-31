<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_Name'
    ];
public function students(){
    return $this->hasMany(Student::class);
}
public function teacher (){
    return $this->belongsTo(Teacher::class);
}
}
