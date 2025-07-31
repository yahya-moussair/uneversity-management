<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'registred_date',
        'abssence_reason'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    public function specializations(){
        return $this->belongsToMany(Specialization::class , 'enrollments');
    }
}
