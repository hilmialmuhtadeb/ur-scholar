<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScholarshipRequest extends FormRequest
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
            "title" => "required",
            "description" => "required",
            "image" => "image|mimes:png,jpg,jpeg|max:2048",
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Kolom judul harus diisi ya!",
            "description.required" => "Kolom deskripsi harus diisi ya!",
            "image.image" => "File yang diupload cuma bisa gambar nih!",
            "image.mimes" => "Yah format gambar kamu tidak didukung.",
            "image.max" => "Ukuran gambar maksimal 2MB",
        ];
    }
}
