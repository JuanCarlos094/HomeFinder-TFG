<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storecups_servicioRequest extends FormRequest
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
            'cups_id' => [
                'required',
            ],
            'servicio_id' => [
                'required',
            ],
            'unidad_id' => [
                'required',
            ],
            'consumo' => [
                'required',
                'numeric'
            ],
            'inicio_prestacion' => [
                'required',
            ],
            'descuento' => [
                'required',
                'numeric'
            ],
            'fecha_inicio_descuento' => [
                'required',
            ],
        ];
    }
}
