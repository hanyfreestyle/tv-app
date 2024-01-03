<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class FaqPhotoEditRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'filter_id'=> "required_with:image",
            'image' => 'mimes:jpeg,jpg,png,gif,webp|max:10000',
        ];
    }
}
