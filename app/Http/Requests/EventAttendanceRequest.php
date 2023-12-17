<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventAttendanceRequest extends FormRequest
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
            'event_id'              => 'required|exists:App\Models\Event,event_id|integer',
            'artist_id'             => 'required|exists:App\Models\Artist,artist_id|integer',
            'attendance_date'       => 'required|string|date|max:255',
        ];
    }
}
