<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApparatStoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'ismi_sharifi' => ['required', 'string'],
            'hodim_malumotlari' => ['required', 'string'],
            'hodim_malumotlari_eng' => ['required', 'string'],
            'hodim_malumotlari_ru' => ['required', 'string'],
            'kasbi' => ['required', 'string'],
            'kasbi_eng' => ['required', 'string'],
            'kasbi_ru' => ['required', 'string'],
            'image_path' => ['nullable', 'mimes:jpg,png,jpeg|max:1024'],
            'address' => ['required','string'],
            'tel' => ['required', 'string'],
            'majburiyati' => ['required', 'string'],
            'majburiyati_eng' => ['required', 'string'],
            'majburiyati_ru' => ['required', 'string'],
            'email' => ['required', 'email']
        ];
    }
}
