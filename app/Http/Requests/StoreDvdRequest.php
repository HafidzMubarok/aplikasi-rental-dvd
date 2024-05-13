<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreDvdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kode_kaset' => 'required',
            'judul_film' => 'required',
            'genre' => 'required',
            'stok_dvd' => 'required',
            'tahun_rilis_film' => 'required',
            'harga_sewa' => 'required',
            'id_bahasa' => 'required',
        ];
    }
}
