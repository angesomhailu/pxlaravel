<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'date_of_birth' => 'required|date',
            'department' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'fullname.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email is already taken',
            'date_of_birth.required' => 'Date of Birth is required',
            'date_of_birth.date' => 'Please provide a valid date',
            'department.required' => 'Department is required',
            'department.string' => 'Department must be a string',
        ];
    }
}
