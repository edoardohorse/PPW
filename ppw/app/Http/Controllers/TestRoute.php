<?php

// https://laravel.com/docs/5.7/controllers

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRoute extends Controller
{
    public function default($name = "prova"){
//        return "Sei nella pagina $name";

        var_dump(route('Welcome'));
    }

    public function formGET(Request $request){
        $name = $request->input('testo');
        return "Richiesta form: $name";
    }

    public function formPOST(Request $request){
        $name = $request->input('testo');
        return "Richiesta form: $name";
    }

    public function ajaxGET($val = "NULL"){
        return "Richiesta ajax: $val";
    }

    // C'è bisogno del Csrf-token
    public function ajaxPOST(Request $req){
        $name = $req->input('name');
        $surname = $req->input('surname');
        return "Richiesta ajax: $name, $surname";
    }




    public function fileUpload(Request $request){
        $file = $request->file('image');
//        dd($request);
//        dd($file);
        if (isset($file)) {


            //Display File Name
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
            echo 'File Mime Type: ' . $file->getMimeType();

            //Move Uploaded File
            $destinationPath = '/uploads';

            // public_path() è un helper che ritorna il path intero della cartella public
            //  con move sposto il file nella directorty indicato nel primo parametro
            //  e assegno il nome con il secondo.
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
        }
    }
}
