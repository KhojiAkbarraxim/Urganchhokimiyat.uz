<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyTypeStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name_uz' => ['required', 'string'],
            'name_eng' => ['required', 'string'],
            'name_ru' => ['required', 'string']
        ];
    }
}
