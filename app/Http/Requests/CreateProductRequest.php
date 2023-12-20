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
            'price' => 'required',
            'discount' => 'required',
            'tid' => 'required',
            'inventory' => 'required',           
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "商品名稱 為必填",
            "name.min" => "商品名稱 至少需2個字元",
            "price.required" => "商品價格 為必填",
            "discount.required" => "優惠 為必填",
            "tid.required" => "商品編號 為必填",
            "inventory.required" => "庫存量 為必填",
        ];
    }    
}