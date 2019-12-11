<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            "nombre" => "required|productos,nombre|alpha_dash|
           min:3",
            "precio" => "required|numeric|min:10|max:1000000",
            "tienda_id" => "required|exists:tiendas,id"
        ];
       
    }
    public function failedValidation(Validator $validator)
    {
          throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

}
