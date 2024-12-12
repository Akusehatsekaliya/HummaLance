<?php

namespace App\Http\Requests;

use App\Constract\Enums\UserJobEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserJobRequest extends FormRequest
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
                UserJobEnum::OFFICE->value,
                UserJobEnum::WFH->value,
                UserJobEnum::FULL_TIME->value,
                UserJobEnum::PART_TIME->value,
            ])],
        ];
    }
}
