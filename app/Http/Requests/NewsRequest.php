<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title_en'=>'required|string|max:255',
            'title_ru'=>'required|string|max:255',
            'title_uz'=>'required|string|max:255',
            'desc_uz'=>'required',
            'desc_en'=>'required',
            'desc_ru'=>'required',
            'category_id'=>'required|numeric'
        ];
    }
}
