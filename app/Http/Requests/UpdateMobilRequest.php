<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMobilRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'nama' => ['sometimes', 'required', 'string', 'max:120'],
            'brand' => ['sometimes', 'required', 'string', 'max:80'],
            'harga' => ['sometimes', 'required', 'integer', 'min:0'],
            'tahun' => ['sometimes', 'required', 'integer', 'min:1950', 'max:'.(date('Y') + 1)],
            'transmisi' => ['sometimes', 'required', 'in:Manual,Matic,CVT'],
            'bahan_bakar' => ['sometimes', 'required', 'in:Bensin,Diesel,Hybrid,Listrik'],
            'status' => ['sometimes', 'required', 'in:tersedia,sold'],
            'foto' => ['sometimes', 'nullable', 'url', 'max:2048'],
        ];
    }
}
