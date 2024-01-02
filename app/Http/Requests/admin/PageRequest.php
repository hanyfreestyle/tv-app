<?php

namespace App\Http\Requests\admin;

use App\Helpers\AdminHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PageRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    protected function prepareForValidation()
    {

    }

    public function rules(Request $request): array
    {

        $id = $this->route('id');

        if($id == '0'){
            $rules =['cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:pages"];
        }else{
            $rules =['cat_id'=> "required|alpha_dash:ascii|min:4|max:50|unique:pages,cat_id,$id" ];
        }

        foreach(config('app.WebLang') as $key=>$lang){
            $rules[$key.".name"] =   'required';
            $rules[$key.".g_title"] =   'required';
            $rules[$key.".g_des"] =   'required';
        }

        return $rules;
    }

}
