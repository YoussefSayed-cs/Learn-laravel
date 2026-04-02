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
        // هنجيب الـ ID مباشرة من الـ Route أو الـ Input
        $postId = $this->route('post') ?? $this->input('id');

        return [
            // استبدل سطر الـ title بالسطر ده
            'title' => 'bail|required|unique:post,title,' . $postId,
            'body' => 'required',
            'author' => 'required',

             'published' => 'nullable',
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
