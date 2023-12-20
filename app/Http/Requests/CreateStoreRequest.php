<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:100',
            'web' => 'required|string|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "商店名稱 為必填",
            "name.min" => "商店名稱 至少需2個字元",
            "web.required" => "官網 為必填",
            "web.min" => "官網 至少需2個字元",
        ];
    }
}