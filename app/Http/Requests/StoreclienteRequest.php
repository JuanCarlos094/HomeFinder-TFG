<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreclienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
                'unique:clientes,NIF',
            ],
            'razon_social'=>[
                'required',
                'unique:clientes,razon_social',
            ],
            'url'=>[
                'required',
                'unique:clientes,url',
            ],
            'SIMEL'=>[
                'required',
                'unique:clientes,SIMEL',
            ],
        ];
    }
}