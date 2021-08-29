<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
//    /**
//     * Kiểm tra quyền người dùng.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return true;
//    }

    /**
     * Định dạng của form request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'product_name'      => "required",
            'unit_price'        => "required",
            'promotion_price'   => 'required',
            'description'       => 'required',
            'hard_drive'        => 'required',
            'cpu'               => 'required',
            'system'            => 'required',
            'screen'            => 'required',
            'brand'             => 'required',
            'type_product'      => 'required',
            'image'             => "required"
        ];
    }
}
