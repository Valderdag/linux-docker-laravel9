<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'avatar' => 'nullable|image',
            'email' => 'required|email|unique:users',
            'role' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Имя обязательно к заполнению',
            'name.string' => 'Имя должно иметь строковый тип данных',
            'avatar.image' => 'Аватар должен быть изображением',
            'email.required' => 'Email обязательно к заполнению',
            'email.email' => 'Неверный формат',
            'email.unique' => 'Пользователь с таким email уже есть',
        ];
    }
}
