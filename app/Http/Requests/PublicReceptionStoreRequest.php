<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicReceptionStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'apparat_id' => ['required', 'int', 'exists:apparats,id'],
            'qabul_joyi_manzili' => ['required', 'string'],
            'begin_date' => ['required' , 'string'],
            'desc_eng' => ['required' , 'string'],
            'desc_uz' => ['required' , 'string'],
            'desc_ru' => ['required' , 'string'],
            'status' => ['int']
        ];
    }
}
