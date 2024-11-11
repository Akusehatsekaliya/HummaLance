<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $googleUserData = session('google_user_data');

        if ($googleUserData) {
            $this->merge([
                'email' => $googleUserData['email'],
                'google_id' => $googleUserData['google_id'],
                'avatar' => $googleUserData['avatar']
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'google_id' => ['nullable', 'string'],
            'avatar' => ['nullable', 'string'],
        ];
    }

    /**
     * Check if the registration is via Google
     */
    protected function isGoogleLogin(): bool
    {
        return session()->has('google_user_data');
    }
}