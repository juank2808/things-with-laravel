<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         =>'min:8|max:100|required|unique:articles',
            'category_id'   =>'required',
            'content'       =>'min:60|required',
            'image'         => 'mimes:jpeg,bmp,png|required'
        ];
    }
}
