<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCurrencyRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount_send' => ['required', 'integer'],
            'devise_send' => ['required', 'string'],
            'country'     => ['required', 'string', 'max:30'],
            'exchange'    => ['required']
        ];
    }
}
