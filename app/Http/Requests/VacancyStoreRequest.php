<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class VacancyStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'file_path' => ['required', 'mimes:xls,xlsx,docx,doc,pdf'],
            'desc_uz' => ['string'],
            'desc_ru' => ['string'],
            'desc_eng' => ['string'],
        ];
    }
}
