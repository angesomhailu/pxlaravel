<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayersRequest extends FormRequest
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
            //
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:players,email',
            'club' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ];
    }


    public function messages(): array
    {
        return [
            //
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'club.required' => 'The club field is required.',
            'club.string' => 'The club must be a string.',
            'club.max' => 'The club may not be greater than 255 characters.',
            'country.required' => 'The country field is required.',
            'country.string' => 'The country must be a string.',
            'country.max' => 'The country may not be greater than 255 characters.',
        ];
    }
}
