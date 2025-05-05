<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MfySectorStoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'tel'=>['required','string'],
            'name'=>['required', 'string'],
            'address'=>['required','string'],
            'director'=>['required', 'string']
        ];
    }
}
