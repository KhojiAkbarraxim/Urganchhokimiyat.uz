<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' =>['required', 'string'],
            'director' =>['required', 'string'],
            'address' =>['required', 'string'],
            'tel' =>['required', 'string'],
            'email' =>['required', 'email'],
            'site_url' =>['required', 'string'],
            'latitude' =>['required'],
            'longitude' =>['required'],
            'type_id' =>['required', 'int', 'exists:company_types,id'],
            'description_uz' =>['required', 'string'],
            'description_eng' =>['required', 'string'],
            'description_ru' =>['required', 'string']
        ];
    }
}
