<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'event_name'    => 'string|max:255',
            'event_type'    => 'string|max:255',
            'start_date'    => 'required|string|date|max:255',
            'end_date'      => 'required|string|date|max:255',
            'location'      => 'required|string|max:255',
            'organizer_id'  => 'required|exists:App\Models\Organizer,organizer_id|integer'
        ];
    }
}
