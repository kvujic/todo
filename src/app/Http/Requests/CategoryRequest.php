<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|max:10|unique:categories,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'カテゴリーを入力してください',
            'name.string' => 'カテゴリーを文字列で入力してください',
            'name.max' => 'カテゴリーを10文字以下で入力してください',
            'name.unique' => 'カテゴリーが既にに存在しています',
        ];
    }
}
