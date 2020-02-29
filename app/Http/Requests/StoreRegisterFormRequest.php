<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRegisterFormRequest extends FormRequest
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

            'full_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/'],
            'email'     => ['required', 'string', 'unique:users'],
            'password'  => ['required', 'string', 'min:8'],
            'terms'     => ['required', 'string', Rule::in(['on'])]
        ];
    }
}
