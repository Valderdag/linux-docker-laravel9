<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'avatar' => 'nullable|image',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'password' => 'required|string|min:6',
            'user_id' => 'required|integer|exists:users,id',
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
            'password.required' => 'Пароль обязателен к заполнению',
            'password.string' => 'Пароль должен иметь строковый тип данных',
            'password.min' => 'Пароль должен содержать минимум 6 знаков'
        ];
    }
}
