<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/'],
            'email'     => ['required', 'string','email:rfc,dns'],
            //'role' => ['required', 'string'],
            //'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['image', 'dimensions:max_width:1200, max_height:1200']
        ];
    }
}
