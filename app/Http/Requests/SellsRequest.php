<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellsRequest extends FormRequest
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
            'name'        => ['required', 'string', 'max:255'],
            'image'       => ['required', 'file', 'image'],
            'description' => ['required', 'string', 'max:2000'],
            'price'       => ['required', 'integer', 'min:100', 'max:9999999'],
        ];
    }

    public function attributes()
    {
        return [
            'name'        => '商品名',
            'image'  => '商品画像',
            'description' => '商品の説明',
            'price'       => '販売価格',
        ];
    }
}
