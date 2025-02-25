<?php

namespace App\Http\Requests\Presentation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePresentationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //auth()->user()->role->name === "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): Array
    {
        return [
           "product_id" => ["required"],
            "bar_cod" => ["required"],
            "packing_deployed" => ["required"],
            "packing_json" => ["required"],
            "status" => ["required"]            
        ];
        return true;
    }
}
