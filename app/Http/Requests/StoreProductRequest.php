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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|min:5|max:255|unique:products,name',
            'qty'      => 'required|integer|min:0',
            'price'    => 'required|numeric|min:0',
            'user_id'  => auth()->user()->role === 'admin' ? 'required|exists:users,id' : 'nullable',
            'category_id' => 'required|exists:category,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'  => 'Nama produk wajib diisi.',
            'name.min'       => 'Nama produk minimal harus 5 karakter.',
            'name.max'       => 'Nama produk tidak boleh lebih dari 255 karakter.',
            'name.unique'    => 'Nama produk sudah digunakan, silakan gunakan nama lain.',

            'qty.required'   => 'Jumlah (kuantitas) produk wajib diisi.',
            'qty.integer'    => 'Jumlah produk harus berupa angka bulat (tidak boleh desimal).',
            'qty.min'        => 'Jumlah produk tidak boleh negatif.',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric'  => 'Harga produk harus berupa angka yang valid.',
            'price.min'      => 'Harga produk tidak boleh negatif.',

            'user_id.required' => 'Pemilik produk wajib dipilih.',
            'user_id.exists'   => 'Pemilik produk yang dipilih tidak valid.',
        ];
    }
}
