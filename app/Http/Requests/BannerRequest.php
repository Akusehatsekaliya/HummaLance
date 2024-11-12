<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'picture' => 'required|mimes:jpg,png,svg,jpeg',
            'title' => 'required|string',
            'subtitle' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'picture.required' => 'Foto Tidak boleh kosong',
            'title.required' => 'Silahkan isi Judul',
            'subtitle.required' => 'Silahkan isi Deskripsi',
        ];
    }
}
