<?php


namespace Acl\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RoleEditRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name'=> 'required'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Tên vai trò bắt buộc nhập'
        ];
    }
}
