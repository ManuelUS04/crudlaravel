<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer|gt:0',
            'stock' => 'required|integer|gt:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'description.required' => 'El campo Descripción es obligatorio',
            'price.required' => 'El campo Precio es obligatorio',
            'price.gt' => 'El campo Precio debe ser un número mayor que 0',
            'stock.required' => 'El campo Stock es obligatorio',
            'stock.gt' => 'El campo Stock debe ser un número mayor que 0',
        ];
    }
}
