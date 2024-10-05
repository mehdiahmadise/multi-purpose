<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'avatar' => ['nullable', 'image', 'max:2000'],
            'banner' => ['nullable', 'image', 'max:2000'],
            'name'   => ['required', 'max:255'],
            'email'  => ['required', 'email', 'max:255'],
            'phone'  => ['nullable', 'max:50'],
            'address' => ['nullable', 'max:255'],
            'about' => ['nullable', 'max:300'],
            'website' => ['nullable', 'url:http,https'],
            'fb_link' => ['nullable', 'url:http,https'],
            'x_link' => ['nullable', 'url:http,https'],
            'in_link' => ['nullable', 'url:http,https'],
            'wa_link' => ['nullable', 'url:http,https'],
            'insta_link' => ['nullable', 'url:http,https'],
        ];
    }
}
