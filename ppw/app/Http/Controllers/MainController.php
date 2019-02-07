<?php

namespace App\Http\Controllers;

use App\Http\Requests\FounderFormRequest;
use DemeterChain\C;
use Validator;

use App\Http\Requests\AsdFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Asd;
use App\User;
use App\Member;
use App\Card;

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

            $fields = $req->validated();
            $fields['logo'] = $this->fileUpload($req, 'logo');

            $asd = new Asd($fields);



            dd($fields);
//            $asd->save();
            return redirect('/boot-asd-done');

        }

    }

    public function signInFounder(FounderFormRequest $req){

        /*
        $validator = Validator::make($req->all(),$req->rules());

        if($validator->fails()){
            return redirect('/boot-socio')
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        }
        else{
            */
            $asd_id = Asd::find(1)->first()->id;
            $fields = $req->all();
//            var_dump($fields);




            $fieldsMember = $this->filterFieldsRequestFromFillable( $fields,  Member::class);
            var_dump($fieldsMember);
            $member = new Member($fieldsMember);
//            $member->save();
//            $member->asd()->attach($asd_id);


            $fieldsUser = $this->filterFieldsRequestFromFillable($fields, User::class);
            var_dump($fieldsMember);
            $user = new User($fieldsUser);
//            $user->save();


            $fieldsCard = $this->filterFieldsRequestFromFillable($fields, Card::class);
            var_dump($fieldsCard);
            $card = new Card($fieldsCard);
//            $card->save();

//            return redirect('/boot-finished');

      //  }

    }

    /**
     * Permette di estrarre dai campi di una richiesta tutti i
     *  campi fillable (richiesti dalla tupla) di uno specifico model
     *
     * @param array $fields
     * @param $modelClass
     * @return array
     */
    private function filterFieldsRequestFromFillable(array $fields, $modelClass){
        // Creo un model Member vuoto
        $model = new $modelClass;

        // Ottengo tutti i campi da inserire
        $fieldsModel = $model->getFillable();


        // Scambio le chiavi dell'array con i valori
        $fieldsModel = array_flip($fieldsModel);

        // Tramite lo scambio è possibile fare la differenza tra i due
        //  array usando come filtro le chiavi
        return array_intersect_key($fields, $fieldsModel);
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
