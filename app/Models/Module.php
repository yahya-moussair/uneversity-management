<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ];
    public function exam () {
        return $this ->hasMany(Exam::class);
    }
    public function specialization (){
        return $this->belongsTo(Specialization::class);
    }
}
