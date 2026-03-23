<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'published' => 'required',
            'author' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'mandatory field.',
            'body.required' => 'mandatory field.',
            'published.required' => 'mandatory field.',
            'author.required' => 'mandatory field.',
        ];
    }
}
