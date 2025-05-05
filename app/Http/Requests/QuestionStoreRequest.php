<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'question_eng' => ['required', 'string'],
            'question_uz' => ['required', 'string'],
            'question_ru' => ['required', 'string'],
            'answer_eng' => ['required', 'string'],
            'answer_uz' => ['required', 'string'],
            'answer_ru' => ['required', 'string']
        ];
    }
}
