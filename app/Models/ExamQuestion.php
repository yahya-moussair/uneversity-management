<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'prompt',
        'choices',
    ];
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    public function examAnswer()
    {
        return $this->hasOne(ExamAnswer::class);
    }
}
