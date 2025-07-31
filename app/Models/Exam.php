<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type_exam',
        'date_exam',
    ];
    public function module (){
        return $this->hasOne(Module::class);
    }
    public function examQuestion () {
        return $this->hasMany(ExamQuestion::class);
    }
}
