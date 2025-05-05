<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PollStoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'company_id' => ['required','int', 'exists:companies,id'],
            'question' => ['required', 'string'],
            'eng_question' => ['required', 'string'],
            'ru_question' => ['required', 'string'],
            'begin_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'publish_limit' => ['required', 'date']
        ];
    }
}
