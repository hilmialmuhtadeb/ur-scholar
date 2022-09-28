<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama tidak boleh kosong ya. isi dulu',
            'email.required' => 'Emailnya jangan dikosongkan ya. yuk isi',
            'email.email' => 'Emailnya harus email beneran nih',
            'email.unique' => 'Yah, email ini udah dipakai. ganti yang lain',
            'password.required' => 'Passwordnya diisi dong',
        ];
    }
}
