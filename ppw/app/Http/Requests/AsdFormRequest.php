<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsdFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '*'             => 'required',
            'name'          => 'max:50 | unique',
            'logo'          => 'file | mimes:jpeg,bmp,png',
            'telefono'      => 'regex:/(01)[0-9]{9}/ | unique',
            'indirizzo'     => 'max:150',
            'citta'         => 'max:150',
            'fax'           => 'regex:/(01)[0-9]{9}/ | unique',
            'email'         => 'email|unique',
            'iva'           => 'digits:11|unique',
            'cap'           => 'digits:5',
            'provincia'     => 'max:150',
            'cod_fiscale'   => 'size:16'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Completare il campo',


        ];
    }
}
