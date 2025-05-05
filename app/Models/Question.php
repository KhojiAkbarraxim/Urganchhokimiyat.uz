<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_eng',
        'question_uz',
        'question_ru',
        'answer_eng',
        'answer_uz',
        'answer_ru'
    ];

    public $timestamps = false;
}
