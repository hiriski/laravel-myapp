<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWork extends FormRequest {
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
            'name'          => 'required',
            'slug'          => 'required|string|unique:works,slug',
            'description'   => 'required|min:5|max:500',
            'image'         => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }
}
