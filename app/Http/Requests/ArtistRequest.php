<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
                'artist_firstname'    => 'required|string|max:255',
                'artist_lastname'     => 'required|string|max:255',
                'artname'             => 'required|string|max:255',
                'artist_number'       => 'required|max:11',
            ];
    }
}