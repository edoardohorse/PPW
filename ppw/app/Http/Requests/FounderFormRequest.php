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

                // User fields (step 1)
                '*'             => 'required',
                'nome'                  =>  'max:50',
                'cognome'               =>  'max:50',
                'citta'                 =>  'max:150',
                'provincia'             =>  'max:150',
                'indirizzo'             =>  'max:150',
                'cap'                   =>  'digits:5',
                'data_nascita'          =>  'date',
                'genere'                =>  'in:Maschio,Femmina,Altro',


                // Member fields (step 2)
                'cod_fiscale'           =>  'required|size:16|unique:members',
                'numero_cell'           =>  'regex:/[0-9]{9}/|unique:members',
                'numero_tel'            =>  'regex:/[0-9]{9}/|unique:members',

                // Password field (step 2)
                'email'                 =>  'email|unique:users_site',
                'password_conf'         =>  'same:password',

                'note'                  =>  'nullable|string|max:250',

                // Member fields (step 3)
                'data_stipula_ass'      =>  'date',
                'scadenza_ass'          =>  'date|after:data_stipula_ass',
                'numero_ass'            =>  'numeric',
                'data_cert_medico'      =>  'date',
                'scadenza_cert_med'     =>  'date|after:data_cert_medico',
                'p_iva'                 =>  'nullable|digits:11|unique:members',

                // Card fields (step 4)
                'data_tesseramento'     =>  'date',
                'scadenza_tesseramento' =>  'date|after:data_tesseramento',











        ];

    }

    public function messages()
    {
        return [
            'cap.digits'        =>  'Il cap deve essere lungo :digits caratteri',
            'p_iva.digits'      =>  'La partita iva deve essere lunga :digits caratteri',
            'cod_fiscale.size'  =>  'Il codice fiscale deve essere lunga :size caratteri',
            'genere.in'         =>  'Inserire un valore fra quelli permessi [Maschio, Femmina, Altro]',
            '*.required'        => 'Completare il campo',
            '*.date'            => 'Inserire una data valida',

            'numero_cell'       => 'Inserire un numero valido',
            'numero_tel'       =>   'Inserire un numero valido',

        ];
    }
}
