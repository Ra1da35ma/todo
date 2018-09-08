<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeTodo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'desc'  => 'required|string'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.string'   => 'The title has to be a text',

            'desc.required' => 'The description is required',
            'desc.string'   => 'The description has to be a text',
        ];
    }
}
