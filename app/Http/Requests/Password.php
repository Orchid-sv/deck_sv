<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Password extends FormRequest
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
            'user_oldpas'=>'required',
            'user_newpas'=>'required|min:6',
            'user_Verificationpas'=>'same:user_newpas'
        ];
    }

    public function messages(){
        return[
            'user_oldpas.required'=>"現在のパスワードが違います",
            'user_newpas.required'=>"パスワードを正しく入力してください",
            'min'=>"パスワードを正しく入力してください",
            'same'=>"新しいパスワードが一致しません"
        ];
    }
}
