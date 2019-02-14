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
        /**
         * Lasciare la wildcard 'per tutti' (*) alla fine dell'array
         *  in modo tale da sovrascrivere quelle presenti.
         *  Se in cima all'array viene sovrascritta da quelli successivi
         *  perciò è come se non esisteste.
         */
        return [
            'nome'          => 'max:50|unique:asds|required',
            'logo'          => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'telefono'      => 'regex:/[0-9]{9}/|unique:asds',
            'indirizzo'     => 'max:150',
            'citta'         => 'max:150',
            'fax'           => 'regex:/[0-9]{9}/|unique:asds',
            'email'         => 'email|unique:asds',
            'p_iva'         => 'digits:11|unique:asds',
            'cap'           => 'digits:5',
            'provincia'     => 'max:150',
            'cod_fiscale'   => 'required|size:16|unique:members',

            '*'             => 'required',
        ];

    }

    public function messages()
    {
        return [
            '*.required'        => 'Completare il campo',
            'cap.digits'        =>  'Il cap deve essere lungo :digits caratteri',
            'p_iva.digits'      =>  'La partita iva deve essere lunga :digits caratteri',
            'cod_fiscale.size'  =>  'Il codice fiscale deve essere lunga :size caratteri',


        ];
    }
}
