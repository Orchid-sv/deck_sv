<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Deck_createRequest extends FormRequest
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
    public function validationData()
    {
        $data = $this->all();
        $base_url_deckcode ='https://shadowverse-portal.com/api/v1/deck/import?format=json&deck_code='.$data["deck_code"];
        $hash =json_decode(file_get_contents($base_url_deckcode),JSON_PRETTY_PRINT);
        if(!isset($hash["data"]["hash"])){
            $data["deck_code"]=null;
        }
        return $data;
    }
        
    public function rules()
    {
        return [
            'deck_name'=>'required|max:50',
            'deck_comment'=>'nullable|max:200',
            'deck_code'=>'required'
        ];
    }
    public function messages(){
        return[
            'deck_name.required'=>"正しく入力してください",
            'deck_code.required'=>"デッキコードが正しくありません(デッキコードは発効後3分間のみ有効です)",
            'max'=>"設定可能文字数を超えています"
        ];
    }
}
