<?php
/**
 * Created by PhpStorm.
 * User: wiseman
 * Date: 11/19/2020
 * Time: 10:25 PM
 */

namespace Acl\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RoleCreateRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name'=> 'required|unique:roles'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Tên vai trò bắt buộc nhập',
            'name.unique'=>'Tên vai trò đã tồn tại'
        ];
    }
}