<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAboutRequest extends FormRequest
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
            'about_user' => [
                'required',
                'file',
                'mimes:pdf,doc,docx,rtf',
                'not_in:jpg,jpeg,png,gif',
                'max:5120',
            ],
        ];
    }
}
