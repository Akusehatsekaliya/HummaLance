<?php

namespace App\Http\Requests;

use App\Constract\Enums\CompanyFieldEnum;
use App\Constract\Enums\CountryEnum;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'job_position' => ['required','string','max:255'],
            'country' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!in_array($value, array_column(CountryEnum::cases(), 'name'))) {
                        $fail("The selected {$attribute} is invalid.");
                    }
                },
            ],
            'company_field' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!in_array($value, array_column(CompanyFieldEnum::cases(), 'name'))) {
                        $fail("The selected {$attribute} is invalid.");
                    }
                },
            ],
            'start_date' => ['required', 'date', 'before_or_equal:end_date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],

        ];
    }
}
