<?php

namespace App\Http\Requests\UserRequests;

use Illuminate\Foundation\Http\FormRequest;

class ReqisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|alpha_dash',
            'surname' => 'required|string|alpha_dash',
            'login' => 'required|string|alpha|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            // 'image' => 'required'
        ];
    }
}
