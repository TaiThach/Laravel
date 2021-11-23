<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHoiRequest extends FormRequest
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
            'noi_dung'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required'
        ];
    }
     public function messages()
    {
        return [
            'noi_dung.required'=>'Vui lòng nhập nội dung',
            'phuong_an_a.required'=>'Vui lập nhập phương án a',
            'phuong_an_b.required'=>'Vui lập nhập phương án b',
            'phuong_an_c.required'=>'Vui lập nhập phương án c',
            'phuong_an_d.required'=>'Vui lập nhập phương án d',
            'dap_an.required'=>'Kết quả đâu'
        ];
    }
}
