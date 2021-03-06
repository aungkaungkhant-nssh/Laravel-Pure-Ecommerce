<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            "address"=>"required",
            "phone"=>"required|max:15"
        ];
    }
    public function messages()
    {
        return[
            'address.required'=>"Address is required",
            'phone.required'=>"Phone is required"
        ];
    }
}
