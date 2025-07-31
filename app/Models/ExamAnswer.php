<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer_option',
    ];
    public function examQuestion () {
        return $this->belongsTo(ExamQuestion::class);
    }
}
