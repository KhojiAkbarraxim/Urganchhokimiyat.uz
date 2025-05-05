<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapStoreRequest extends FormRequest
{
 
    public function rules(): array
    {
        return [
            'company_id' => ['required', 'int','exists:companies,id'],
            'address' => ['required','string'], 
            'obj_type' => ['required', 'string'],
            'longitude' => ['required', 'numeric'],
            'latitude' => ['required', 'numeric'],
            'tree_count' => ['int']
        ];
    }
  
}
