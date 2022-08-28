<?php

namespace App\Http\Requests\Admin\Post;

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
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string',
            'image' => 'required|image|max:1000',
            'content' => 'required|min:500|max:12000',
            'description' => 'required|min:10|max:512',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'required|integer|exists:tags,id',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'image.required' => 'Необходимо выбрать изображение статьи',
            'image.image' => 'Выбранный файл должен быть изображением',
            'image.max' => 'Загружаемое изображение должно быть не более 1М',
            'content.required' => 'Статья должна иметь текст',
            'content.min' => 'Объем текста должен быть минимум 500 символов',
            'content.max' => 'Объем текста должен быть максимум 12000 символов',
            'description.required' => 'Краткое содержание обязательно для поисковй оптимизации',
            'description.min' => 'Объем текста должен быть минимум 50 символови',
            'description.max' => 'Объем текста должен быть максимум 512 символов',
        ];
    }
}
