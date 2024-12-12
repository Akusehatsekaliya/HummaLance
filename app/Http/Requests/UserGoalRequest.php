<?php

namespace App\Http\Requests;

use App\Constract\Enums\UserGoalEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserGoalRequest extends FormRequest
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
            'goal' => ['required', Rule::in([
                UserGoalEnum::SIDE->value,
                UserGoalEnum::STEADY->value,
                UserGoalEnum::EXPERIENCE->value,
                UserGoalEnum::NOTHING->value,
            ])],
        ];
    }
}
