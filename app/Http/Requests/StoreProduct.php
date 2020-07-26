<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|unique:products|max:128',
            'slug' => 'required|unique:products|max:128',
            'price' => 'required|min:1',
            'description' => 'nullable',
            'recommended' => 'boolean',
            'category_id' => 'nullable',
            'img' => 'nullable|mimes:jpeg,bmp,gif',
        ];
    }
}
