<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class FaqPhotoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "filter_id"    => "required",
            "image"    => "required|array|min:1|max:5",
            'image.*'  => 'required|mimes:jpg,jpeg,png,webp|max:1000',
        ];
    }
}
