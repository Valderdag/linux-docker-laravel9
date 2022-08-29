<?php

namespace App\Http\Requests\Personal\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'message' => 'required|string|min:10|max:500'
        ];
    }
    public function messages()
    {
        return[
            'message.required' => 'Необходимо написать комментарий',
            'message.string' => 'Коментарий должен иметь строчный тип данных',
            'message.max' => 'Объем текста не более 500 знаков',
            'message.min' => 'Объем текста не менее 10 знаков',
        ];
    }
}
