<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>['required','string','max:255'],
            'email'=>['required','string','max:255'],
            'phone'=>['required','string','max:255'],
            'name_kana'=>['required','string','max:255'],
            'body'=>['required','string','max:255'],
        ];
    }

    public function attributes()
    {
        return[
            'name'=>"名前",
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => "正しく入力せよ"
        ];
    }
}
