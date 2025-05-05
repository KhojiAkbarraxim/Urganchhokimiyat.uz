<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'title_uz'=>['required', 'string'],
            'title_eng'=>['required', 'string'],
            'title_ru'=>['required', 'string'],
            'content_uz'=>['required', 'string'],
            'content_eng'=>['required', 'string'],
            'content_ru'=>['required', 'string'],
            'category_id'=>['required', 'int','exists:event_types,id'],
            'image_path' => ['nullable', 'mimes:jpg,png,jpeg|max:1024']
        ];
    }
}
