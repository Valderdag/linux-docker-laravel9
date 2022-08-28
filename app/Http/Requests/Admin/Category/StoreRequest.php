<?php

namespace App\Http\Requests\Admin\Category;

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
            'title' => 'required|string',
            'image' => 'required|image|max:1000',
            'description' => 'required|min:50|max:1000'
        ];
    }
    public  function messages()
    {
        return [
            'title.required' => 'Название категории обязательно к заполнению',
            'title.string' => 'Данные должны иметь строковый тип',
            'image.required' => 'Добавлять изображение обязательно',
            'image.image' => 'Загружаемый файл должен быть изображением',
            'image.max' => 'Загружаемое изображение должно быть не более 1М',
            'description.required' => 'Описание категории обязательно к заполнению',
            'description.min' => 'Объем текста минимум 50 знаков',
            'description.max' => 'Объем текста максимум 1000 знаков'
        ];
    }
}
