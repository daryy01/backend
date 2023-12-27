<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassesRequest extends FormRequest
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
            'class_name'            => 'string|max:255',
            'class_date'            => 'required|string|date|max:255',
            'instructor_id'         => 'exists:App\Models\Instructor,instructor_id|integer',
            'class_description'     => 'string|max:255',
        ];
    }
}
