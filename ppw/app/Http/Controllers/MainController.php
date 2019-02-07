<?php

namespace App\Http\Controllers;

use Validator;

use App\Http\Requests\AsdFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Asd;

class MainController extends Controller
{

    /**
     *  Controlla se l'ASD è stata già registrata
     *
     * @return bool
     */
    private function isASDAlreadySigned(){

        // Controllo se esiste almeno una tupla nella tabella ASD
        // ritorna true se esiste altrimenti false
        return DB::table('asds')->first() == null? false : true;
    }


    public function index(){

    }

    public function firstSignInASD(){
        // se l'ASD è già registrata fa il redirect alla B005
//        dd( $this->isASDAlreadySigned());
        if( $this->isASDAlreadySigned()){
//            return 'Gia registrata';
            return view('boot/welcome', ['route' => 'B005']);
        }
        else{
//            return 'Non registrata';
            return view('boot/welcome', ['route' => 'A000']);
        }
    }

    public function signInASD(AsdFormRequest $req){
//        dd($req);


        $validator = Validator::make($req->all(),$req->rules());

        if($validator->fails()){
            return redirect('/boot')
                ->withErrors($validator)
                ->withInput();
//            dd('Fallito');

        }
        else{
            $asd = new Asd();
//            $req->nome

            $asd->nome          = $req['nome'];
            $asd->numero_tel    = $req['numero_tel'];
            $asd->logo          = $this->fileUpload($req, 'logo');
            $asd->indirizzo     = $req['indirizzo'];
            $asd->citta         = $req['citta'];
            $asd->fax           = $req['fax'];
            $asd->email         = $req['email'];
            $asd->p_iva         = $req['p_iva'];
            $asd->cap           = $req['cap'];
            $asd->provincia     = $req['provincia'];
            $asd->cod_fiscale   = $req['cod_fiscale'];
//            dd($asd);
            $asd->save();
            return redirect('/boot-asd-done');

        }

    }


    /**
     * Metodo per carica i file nella cartella /uploads
     *
     * @param Request $request
     * @param $nameField    Nome del campo usato nel form
     * @return string|null
     */
    private function fileUpload(Request $request, $nameField){
        $file = $request->file($nameField);
        $destinationPath = '/uploads';
//        dd($request);
//        dd($file);
        if (isset($file)) {


           /* //Display File Name
            echo 'File Name: ' . $file->getClientOriginalName();
            echo '<br>';

            //Display File Extension
            echo 'File Extension: ' . $file->getClientOriginalExtension();
            echo '<br>';

            //Display File Real Path
            echo 'File Real Path: ' . $file->getRealPath();
            echo '<br>';

            //Display File Size
            $size  = round($file->getSize()/(pow(1024,2)),2);
            echo "File Size:  $size MB";
            echo '<br>';

            //Display File Mime Type
            echo 'File Mime Type: ' . $file->getMimeType();*/

            //Move Uploaded File

            // public_path() è un helper che ritorna il path intero della cartella public
            //  con move sposto il file nella directorty indicato nel primo parametro
            //  e assegno il nome con il secondo.
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            return $destinationPath.'/'.$file->getClientOriginalName();
        }

        return null;
    }
}
