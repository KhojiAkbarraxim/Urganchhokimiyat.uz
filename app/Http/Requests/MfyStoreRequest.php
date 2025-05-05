<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MfyStoreRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
        'tel'=>['required','string'],
        'name'=>['required', 'string'],
        'raisi'=>['required', 'string'],
        'sector_id'=>['required','int', 'exists:mfy_sectors,id']
        ];
    }
}
