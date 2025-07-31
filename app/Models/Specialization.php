<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
    ];
     public function specialization(){
        return $this->hasOne(Teacher::class);
    }
    public function module(){
        return $this->hasMany(Module::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class , 'enrollments');
    }
}
