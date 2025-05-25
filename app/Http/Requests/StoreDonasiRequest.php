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
            'nominal' => 'required|numeric|min:1000',
            'peristiwa' => 'required|string',
            'methode' => 'required|string|',
            'pesan' => 'nullable|string|max:255',
        ];
    }
    public function messages()
    {
     return[
        'nominal.required' => 'Nominal donasi harus diisi.',
        'nominal.numeric' => 'Nominal donasi harus berupa angka.',
        'nominal.min' => 'Nominal donasi minimal Rp 1000.',
        'peristiwa.required' => 'Peristiwa donasi harus diisi.',
        'methode.required' => 'Metode pembayaran harus dipilih.',
        'methode.string' => 'Metode pembayaran tidak valid.',
        'methode.in' => 'Metode pembayaran tidak valid.',
        'pesan.string' => 'Pesan harus berupa teks.',
        'pesan.max' => 'Pesan maksimal 255 karakter.',
     ];
    }
}
