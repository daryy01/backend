<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'instructor_firstname'      => 'required|string|max:255',
            'instructor_lastname'       => 'required|string|max:255',
            'instructor_contact'        => 'required|max:11',
            'instructor_bio'            => 'string|max:255',
        ];
    }
}
