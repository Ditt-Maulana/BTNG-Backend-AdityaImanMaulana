<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMobilRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:120'],
            'brand' => ['required', 'string', 'max:80'],
            'harga' => ['required', 'integer', 'min:0'],
            'tahun' => ['required', 'integer', 'min:1950', 'max:'.(date('Y') + 1)],
            'transmisi' => ['required', 'in:Manual,Matic,CVT'],
            'bahan_bakar' => ['required', 'in:Bensin,Diesel,Hybrid,Listrik'],
            'status' => ['sometimes', 'in:tersedia,sold'],
            'foto' => ['nullable', 'url', 'max:2048'],
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama mobil wajib diisi.',
            'brand.required' => 'Brand mobil wajib diisi.',
            'harga.required' => 'Harga mobil wajib diisi.',
            'transmisi.in' => 'Transmisi harus Manual, Matic, atau CVT.',
            'bahan_bakar.in' => 'Bahan bakar tidak valid.',
            'status.in' => 'Status harus tersedia atau sold.',
            'foto.url' => 'Foto harus berupa URL yang valid.',
        ];
    }
}
