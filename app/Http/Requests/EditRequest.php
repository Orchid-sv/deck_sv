<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'user_information_name'=>'required|max:15',
            'user_information_introduction'=>'required|max:200',
            'Verification_emaiil'=>'same:user_information|email'
        ];
    }

    public function messages(){
        return[
            'required'=>"正しく入力してください",
            'email'=>"メールアドレスを入力してください",
            'same'=>"メールアドレスが一致しません",
            'max'=>"設定可能文字数を超えています"
        ];
    }
}
