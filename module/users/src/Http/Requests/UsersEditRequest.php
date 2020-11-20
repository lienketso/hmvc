<?php


namespace Users\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
{
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
            'email'=>'required|email',
            're_password' => 'same:password',
            'full_name' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.required'=>'Email bắt buộc nhập',
            'email.email'=>'Email không đúng',
            're_password.same' => 'Mật khẩu nhắc lại không trùng',
            'full_name.required' => 'Họ và tên không được bỏ trống'
        ];
    }
}
