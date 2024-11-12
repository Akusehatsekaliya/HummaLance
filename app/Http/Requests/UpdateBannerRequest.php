<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerRequest extends FormRequest
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
            'picture_update' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'picture_update.max' => 'Ukuran foto tidak boleh lebih dari 10MB',
            'title.required' => 'Judul tidak boleh kosong',
            'subtitle.required' => 'Deskripsi tidak boleh kosong',
        ];
    }
}
