<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreditRequest extends FormRequest
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
            'ten_goi'=>'required',
            'credit'=>'required',
            'so_tien'=>'required'
        ];
    }
    public function messages()
    {
        return [
           'ten_goi.required'=>'Vui lòng nhập tên gói',
           'credit.required'=>'Vui lòng nhập credit',
           'so_tien'=>'vui lòng nhập số tiền'
        ];
    }
}
