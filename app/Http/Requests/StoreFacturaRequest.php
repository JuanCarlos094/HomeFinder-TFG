<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacturaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'cliente_id' => [
                'required',
            ],
            'codigo_factura' => [
                'required',
                'unique:facturas,codigo_factura',
            ],
            'direccion' => [
                'required',
            ],
        ];
    }
}
