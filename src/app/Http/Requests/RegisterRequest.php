<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|string|email|min:0|max:150',
            'password' => 'required|min:8|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.min' => '0字以上で入力してください',
            'email.max' => '150文字以内で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => '8文字以上で入力してください',
            'password.max' => '255文字以内で入力してください',
        ];
    }
}
