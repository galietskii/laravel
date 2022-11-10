<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'string|required|max:191',
            'email' => 'email|required|max:191',
            'phone' => 'string|required|max:191',
            'massage' => 'string|nullable|max:2500',
        ];
    }

    public function attributes() // обозначение переменных
    {
        return [
            'name' => 'Поле "Name"',
            'email' => 'Поле "Email"',
            'phone' => 'Поле "Telephone"',
            'massage' => 'Поле "Message"',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Не введёно :attribute',
            '*.max' => 'Превышена допустимая длина поля \":attribute\"',
            '*.email' => 'Должна быть указана електронная почта',
        ];
    }
}
