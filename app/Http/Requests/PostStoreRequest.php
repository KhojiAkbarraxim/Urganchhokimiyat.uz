<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    public function rules(): array
    {   
        return [          
            'title' => ['required','string'],
            'content' => ['required','string'],
            'category' => ['required','string'],
            'image_path' => ['mimes:jpg,png,jpeg|max:2048'],
            'eng_title' => ['required','string'],
            'eng_content' => ['required','string'],
            'ru_title' => ['required','string'],
            'ru_content' => ['required','sitrng']
        ];
    }
}
