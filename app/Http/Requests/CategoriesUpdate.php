<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;

class CategoriesUpdate extends FormRequest
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
        $tableNameCategory = (new Category())->getTable();
        return [
            'title' => "required|min:3|alpha_dash|unique:{$tableNameCategory},title"
        ];
    }

    public function attributes()
    {
        return [
            'title' => '"Наименование категории"'
        ];
    }

}
