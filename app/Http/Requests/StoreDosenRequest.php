<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDosenRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Izinkan akses
    }

    public function rules()
    {
        return [
            'kode_dosen' => 'required|string|max:3|unique:dosens',
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosens',
            'email' => 'required|email|unique:dosens',
            'no_telepon' => 'required|string|max:15',
        ];
    }
}
