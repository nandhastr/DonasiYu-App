<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nominal' => 'required|numeric|min:10000',
            'metode' => 'required|string|in:bank,ovo,gopay',
            'pesan' => 'nullable|string|max:255',
        ];
    }
    public function messages()
    {
     return[
        'nominal.required' => 'Nominal donasi harus diisi.',
        'nominal.numeric' => 'Nominal donasi harus berupa angka.',
        'nominal.min' => 'Nominal donasi minimal Rp 10.000.',
        'metode.required' => 'Metode pembayaran harus dipilih.',
        'metode.string' => 'Metode pembayaran tidak valid.',
        'metode.in' => 'Metode pembayaran tidak valid.',
        'pesan.string' => 'Pesan harus berupa teks.',
        'pesan.max' => 'Pesan maksimal 255 karakter.',
     ];
    }
}
