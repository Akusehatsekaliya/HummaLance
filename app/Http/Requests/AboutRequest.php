<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required'
        ];
    }
    public function messages(): array {
        return [
            'title.required' => 'The title must be filled in',
            'description.required' => 'The description must be filled in',
            'image.image' => 'The input must be an image',
            'image.mimes' => 'Images must be jpeg,png,jpg files',
            'image.max' => 'Image size must be less than 2MB',
        ];
    }
}
