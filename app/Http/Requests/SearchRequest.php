<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
        if(isset($data["keyword"])){
            $existence=0;
            $base_url_card ='https://shadowverse-portal.com/api/v1/cards?format=json&lang=ja';
            $card_data=json_decode(file_get_contents($base_url_card),JSON_PRETTY_PRINT);
            $card_data=$card_data['data']['cards'];

            foreach($card_data as $value){
                if(strpos($value['card_name'],strval($data["keyword"])) !==false){
                    $existence=1;
                }
            }
            if($existence===0){
                $data["keyword"]=null;
            }
        }
        return $data;
    }
    
    
    public function rules()
    {
        return [
            'keyword'=>'required',
        ];
    }

    public function messages(){
        return[
            'required'=>"デッキ・カード名が見つかりませんでした"
        ];
    }
}
