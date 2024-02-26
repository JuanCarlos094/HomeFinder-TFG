<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateclienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'NIF'=>[
                'required',
                'regex:/^[0-9]{8}[A-Za-z]$/i', 
                'unique:clientes,NIF,'. $this->id
            ],
            'razon_social'=>[
                'required',
                'unique:clientes,razon_social,'. $this->id,
            ],
            'nombre_comercial'=>[
                'required',
                'unique:clientes,nombre_comercial,'. $this->id,
            ],
            'url'=>[
                'required',
                'unique:clientes,url,'. $this->id,
            ],
            'SIMEL'=>[
                'required',
                'unique:clientes,SIMEL,'. $this->id
            ],
        ];
    }
}