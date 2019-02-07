<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FounderFormRequest extends FormRequest
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

    public function rules()
    {
        /**
         * Lasciare la wildcard 'per tutti' (*) alla fine dell'array
         *  in modo tale da sovrascrivere quelle presenti.
         *  Se in cima all'array viene sovrascritta da quelli successivi
         *  perciò è come se non esisteste.
         */
        return [


//            'fax'           => 'regex:/[0-9]{9}/|unique:asds',
//            'email'         => 'email|unique:asds',
//            'p_iva'         => 'digits:11|unique:asds',


//            'cod_fiscale'   => 'size:16',
//
//            '*'             => 'required',

                // User fields
                'nome'                  =>  'max:50',
                'cognome'               =>  'max:50',
                'cap'                   =>  'digits:5',
                'indirizzo'             =>  'max:150',
                'citta'                 =>  'max:150',
                'provincia'             =>  'max:150',
                'data_nascita'          =>  'date',
                'genere'                =>  'in:maschio,femmina,altro',


                // Member fields
                'cod_fiscale'           =>  'size:16',
                'numero_cell'           =>  'regex:/[0-9]{9}/|unique:members',
                'numero_tel'            =>  'regex:/[0-9]{9}/|unique:members',
                'data_stipula_ass'      =>  'date',
                'scadenza_ass'          =>  'date|different:data_stipula_ass',
//                'numero_ass'            =>  '', ?
                'data_cert_medico'      =>  'date',
                'scadenza_cert_med'     =>  'date|different:scadenza_cert_med',
//                'ruolo'                 =>  '', ?
                'note'                  =>  'string|max:250',
                'p_iva'                 =>  'digits:11|unique:members',

                // Card fields
                'data_tesseramento'     =>  'date',
                'scadenza_tesseramento' =>  'date|different:data_tesseramento',











        ];

    }

    public function messages()
    {
        return [
//            '*.required'        => 'Completare il campo',
//            'cap.digits'        =>  'Il cap deve essere lungo :digits caratteri',
//            'p_iva.digits'      =>  'La partita iva deve essere lunga :digits caratteri',
//            'cod_fiscale.size'  =>  'Il codice fiscale deve essere lunga :size caratteri',


        ];
    }
}
