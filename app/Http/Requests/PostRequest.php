<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

        $rules = [
            'title_ru'       => 'bail|required|max:255',
            'category_id'    => 'required',
            'mainImage'      => 'required',
            'description_ru' => 'max:250',
            'description_uk' => 'max:250',
        ];

        return $rules;
    }


    public function messages()
    {
        return [
            'title_ru.required'    => 'Заголовок обязателен для статьи',
            'title_ru.unique'      => 'Такой заголовок уже есть у другой статьи',
            'title_ru.max'         => 'Заголовок не должен привышать :max символов',
            'description_ru.max'   => 'Краткое описание не должен привышать :max символов',
            'description_uk.max'   => 'Краткое укр описание не должен привышать :max символов',
            'category_id.required' => 'Нужно выбрать категорию статьи',
            'mainImage.required'   => 'Выберите главную фотографию',
        ];
    }
}
