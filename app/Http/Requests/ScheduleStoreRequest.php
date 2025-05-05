<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleStoreRequest extends FormRequest
{
 
    public function rules(): array
    {
        return [
        'day' => ['required', 'string'],
        'time' => ['required', 'string'],
        'desc_ru' => ['required', 'string'],
        'desc_uz' => ['required', 'string'],
        'desc_eng' => ['required', 'string'],
        'apparat_id' => ['required', 'string','exists:apparats,id'],
        ];
    }
}
