<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTheme extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'title'         => 'required|max:255',
            'category_id'   => 'required|integer',
            'slug'          => 'required|string',
            'content'       => 'required',
            'image'         => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }
}
