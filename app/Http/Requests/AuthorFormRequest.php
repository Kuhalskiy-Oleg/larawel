<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorFormRequest extends FormRequest
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
            "nameAuthor" => [
                'bail',
                'nullable',
                'string',
                'max:500',
                'exists:authors_articles,name',
                'regex:/^[\'.,0-9a-zа-яё\s]*$/iu'
            ],
        ];
    }


    public function messages()
    {
        return [
            'nameAuthor.exists' => 'Данного Автора не существует !',
        ];
    }
}
