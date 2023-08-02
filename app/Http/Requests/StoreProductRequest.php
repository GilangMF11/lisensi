<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sku' => ['required', 'unique:products', 'max:100'],
            'nama_produk' => ['required', 'max:100'],
            'harga_jual' => ['required', 'numeric', 'min:1'],
            'komisi' => ['required', 'numeric', 'min:0'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
