<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsResourceUpdate extends FormRequest
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
            'title' =>'required|min:5|max:50',
            'description'=>'min:3|max:30',
            'text'=>'required|min:5|max:2000',
            'author'=>'required|min:5'
        ];
    }
    public function attributes()
    {
        return [
            'title' => '"Заголовок"',
            'description' => '"Краткое описание"',
            'text' => '"Текст новости"'
        ];
    }



}
