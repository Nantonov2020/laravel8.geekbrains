<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersStore extends FormRequest
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
            'name' =>'required|min:2|max:50|alpha_dash',
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|min:5|max:30',
            'message'=>'required|min:5'
        ];
    }

    public function attributes()
    {
        return [
            'name' => '"Имя"',
            'message' => '"Текст заказа"'
        ];
    }
}
