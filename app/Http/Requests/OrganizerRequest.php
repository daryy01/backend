<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizerRequest extends FormRequest
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
            'organizer_firstname'     => 'required|string|max:255',
            'organizer_lastname'      => 'required|string|max:255',
            'organizer_contact'       => 'required|max:11',
            'organizer_bio'           => 'string|max:255',
        ];
    }
}
