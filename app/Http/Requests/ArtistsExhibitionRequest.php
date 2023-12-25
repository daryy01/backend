<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistsExhibitionRequest extends FormRequest
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
            'artist_id'              => 'required|exists:App\Models\Artist,artist_id|integer',
            'exhibition_name'        => 'required|string|max:255',
            'exhibition_date'        => 'required|string|date|max:255',
            'image'                  => 'required|image|mimes:jpg,bmp,png|max:5120',
        ];
    }
}
