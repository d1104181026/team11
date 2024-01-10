<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:191',
            'tid' => 'required',
            'price' => 'nullable',
            'discount' => 'nullable',
            'inventory' => 'required|string|min:2|max:191',
            
            ];
    }
    public function messages()
    {
        return [
            "name.required" => "商品名稱 為必填",
            "name.min" => "商品名稱 至少需2個字元",
            "tid.required" => "商店名稱 為必填",
            "price" => "商品價格 為必填",
            "discount" => "商品優惠 為必填",
            "inventory" => "商品庫存量 必須為數字",
            
        ];
    }    
}