<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDosenRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Izinkan akses
    }

    public function rules()
    {
        return [
            'kode_dosen' => 'required|string|max:3|unique:dosens,kode_dosen,' . $this->dosen->id,
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosens,nip,' . $this->dosen->id,
            'email' => 'required|email|unique:dosens,email,' . $this->dosen->id,
            'no_telepon' => 'required|string|max:15',
        ];
    }
}
