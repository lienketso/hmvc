<?php


namespace Post\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title'=> 'required|min:2',
            'slug'=>'required|unique:post'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Tiêu đề bắt buộc nhập',
            'title.min'=>'Tiêu đề phải lớn hơn 2 ký tự',
            'slug.required'=>'Đường dẫn tĩnh bắt buộc',
            'slug.unique'=>'Đường dẫn đã tồn tại'
        ];
    }

}
