<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required','email']
        ];
    }
}
