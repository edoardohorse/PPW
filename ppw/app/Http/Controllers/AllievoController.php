<?php

namespace App\Http\Controllers;

use App\Scheduling;
use App\Transaction;
use Illuminate\Validation\Rule;
use App\Collaborator;
use App\Http\Requests\FounderFormRequest;
use App\Internal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Member;
use App\Card;
use App\Asd;
use App\Teacher;
use App\Course;
use App\SchedulingCourse;
use Validator;
use Illuminate\Support\Facades\Hash;





class AllievoController extends Controller
{

    private static $WEEK = [
        'Monday' => 'Lunedì',
        'Tuesday' => 'Martedì',
        'Wednesday' => 'Mercoledì',
        'Thursday' => 'Giovedì',
        'Friday' => 'Venerdì',
        'Saturday' => 'Sabato',
        'Sunday' => 'Domenica',
        ];
    static $path = 'home/secretariat/members/allievo/allievo';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->fetchAll();
        return view(AllievoController::$path, compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = $this->fetchAll();
        return view(AllievoController::$path.'-create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FounderFormRequest $request)
    {

        $validator = Validator::make($request->all(), [
            '*'                     => 'required',
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


            'data_tesseramento'     =>  'date',
            'scadenza_tesseramento' =>  'date|after:data_tesseramento',
        ]);

        if ($validator->fails()) {
            return redirect()->route('M221')
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        } else {
            //            dd($req->validated());

            $asd_id = Asd::find(1)->first()->id;
            $fields = $request->all();
            //            var_dump($fields);




            $fieldsMember = BootController::filterFieldsRequestFromFillable($fields, Member::class);
            //            var_dump($fieldsMember);

            $member = new Member($fieldsMember);
            $member->save();
            $member->asd()->attach($asd_id);


            $fieldsUser = BootController::filterFieldsRequestFromFillable($fields, User::class);
            $fieldsUser['member_id'] = $member->id;
            $fieldsUser['tipo'] = 'allievo';
            $user = new User($fieldsUser);
            //                        dd($user );
            $user->save();


            $fieldsCard = BootController::filterFieldsRequestFromFillable($fields, Card::class);
            $fieldsCard['user_id'] = $user->id;
            //            var_dump($fieldsCard);
            $card = new Card($fieldsCard);
            $card->user_id = $user->id;
            $card->save();


            return redirect()->route('M220');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members        = $this->fetchAll();
        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $card           = Card          ::where('user_id','=',$user->id)->first();

        return view(AllievoController::$path.'-show',
            compact('members','member','user',
                'collaborator','card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members        = $this->fetchAll();
        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $card           = Card          ::where('user_id','=',$user->id)->first();

        return view(AllievoController::$path.'-edit',
            compact('members','member','user',
                'collaborator','card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);


        $validator = Validator::make($request->all(), [
            'nome'                  =>  'max:50',
            'cognome'               =>  'max:50',
            'citta'                 =>  'max:150',
            'provincia'             =>  'max:150',
            'indirizzo'             =>  'max:150',
            'cap'                   =>  'digits:5',
            'data_nascita'          =>  'date',
            'genere'                =>  'in:Maschio,Femmina,Altro',


            // Member fields (step 2)
            'cod_fiscale'           =>  ['required','size:16',Rule::unique('members')->ignore($member->cod_fiscale, 'cod_fiscale')],
            'numero_cell'           =>   ['regex:/[0-9]{9}/',Rule::unique('members')->ignore($member->numero_cell, 'numero_cell')],
            'numero_tel'            =>  ['regex:/[0-9]{9}/',Rule::unique('members')->ignore($member->numero_tel, 'numero_tel')],


            // Member fields (step 3)
            'data_stipula_ass'      =>  'date',
            'scadenza_ass'          =>  'date|after:data_stipula_ass',
            'numero_ass'            =>  'numeric',
            'data_cert_medico'      =>  'date',
            'scadenza_cert_med'     =>  'date|after:data_cert_medico',
            'p_iva'                 =>  ['nullable','digits:11',Rule::unique('members')->ignore($member->p_iva, 'members')],
        ]);



        if ($validator->fails()) {
            return redirect()->route('M223',$id)
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        } else {
            //            dd($req->validated());


            $asd_id = Asd::find(1)->first()->id;
            $fields = $request->all();
            //            var_dump($fields);


            $fieldsMember = BootController::filterFieldsRequestFromFillable($fields, Member::class);
            //            var_dump($fieldsMember);


            $member->fill($fieldsMember)->save();


            $fieldsUser = BootController::filterFieldsRequestFromFillable($fields, User::class);
            $fieldsUser['member_id'] = $member->id;
            $fieldsUser['tipo'] = 'allievo';
            //            dd($fieldsUser );

            $user->fill($fieldsUser)->save();


            $fieldsCard = BootController::filterFieldsRequestFromFillable($fields, Card::class);
            $fieldsCard['user_id'] = $user->id;
            //            var_dump($fieldsCard);
            //            $card = new Card($fieldsCard);
            //            $card->user_id = $user->id;
            $card = new Card();
            //            $card->user_id = $user->id;
            $card->fill($fieldsCard)->save();



            return redirect()->route('M220');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $card           = Card          ::where('user_id','=',$user->id)->first();

        $member->delete();

        return view(AllievoController::$path.'-delete',
            compact('members','member','user',
                'collaborator','card'));
    }

    public function course($id){
        $members        = $this->fetchAll();
        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $card           = Card          ::where('user_id','=',$user->id)->first();

        $courses = Course::all(['id','nome_corso'])->toArray();



//        $courses_assigned_id = [];
//        foreach ($courses_id as $course) {
//            array_push($courses_assigned_id, $course['id']);
//        }


        return view(AllievoController::$path.'-course',compact(
            'members','member','user',
            'collaborator','card','courses'));
    }

    public function assignCourse(Request $request, $id){



        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();


//        dd($user,$request->all());
        $user->course()->attach($user->id,
            ['data_inizio'=>$request->data_inizio,'data_fine'=>$request->data_fine,'course_id'=>$request->course]);

        $t = new Transaction();
        $t->modalita_pagamento  =  $request->metodo;
        $t->descrizione     = 'Iscrizione al corso '.Course::find($request->course)->first()->nome_corso;
        $t->file_fattura    =   "";
        $t->data = date('Y-m-d');
        $t->importo         = $request->costo;
        $t->tipo_transazione    = 'entrata';
        $t->tipo_ricevuta    = 'ricevuta';
        $t->tipo_fattura       = '';

        $t->user_id         = $user->id;
        $t->asd_id          = 1;
        $t->save();

        $pdf = PdfController::pdf($t->id);
        
        $t->file_fattura    = "/uploads/ricevuta/pdf$t->id.pdf";
        $t->save();

//        $pdf->download('ciao.pdf');
        return redirect()->route('M220');
    }

    public function getHour(Request $req){
//        return $req->courseId;

            return [
                'hour'      =>  $this->getHoursOfCourse($req->dataStart,$req->dataEnd,$req->courseId),
                'cost'      =>  Course::find(1)->first()->costo_orario
            ];
    }

    private function fetchAll(){
        return DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m 
WHERE m.id = u.member_id AND u.tipo = 'allievo' 
 GROUP BY m.id ASC ");
    }

    private function extractHourToInt($time){return (int)substr($time,0,2);}



    private function getHoursOfCourse($dateStart,$dateEnd,$course_id){
        $days = $this->getCourseDurationPerDay($course_id);
//        dd($days);

//        $data_i = date('d-m-Y');
//        $data_f = '10-03-2019';

//        dd($WEEK[date('l', strtotime($data_i))]);

//        foreach
//        dd($data_i,$data_f);
        $next_day = $dateStart;
        $dateEnd = date('Y-m-d', strtotime($dateEnd .' +1 day'));
        $hour = 0;
        do{
            $dayOfWeek = $this->getDayofWeek($next_day);

            $hour += $days[$dayOfWeek];

            $next_day = date('Y-m-d', strtotime($next_day .' +1 day'));
//            var_dump($next_day);
//            var_dump($this->getDayofWeek($next_day));
        }while($next_day != $dateEnd);

//        dd($days,$hour,$dateEnd, $dateEnd);
        return $hour;
    }


    private function getDayofWeek($date){
        return AllievoController::$WEEK[date('l', strtotime($date))];
    }



    private function getCourseDurationPerDay($course_id){
        $id_schedulings = SchedulingCourse::where('course_id','=',$course_id)->select('scheduling_id')->get()->toArray();
        $days = [
            'Lunedì'=> 0,
            'Martedì'=> 0,
            'Mercoledì'=> 0,
            'Giovedì'=> 0,
            'Venerdì'=> 0,
            'Sabato'=> 0,
            'Domenica'=> 0,
        ];
        foreach($id_schedulings as $id){

            $scheduling = Scheduling::find($id)->first()->toArray();
//            dd($scheduling);
            $ora_inizio =  $this->extractHourToInt( $scheduling['ora_inizio']);
            $ora_fine =   $this->extractHourToInt( $scheduling['ora_fine']);

            $duration = $ora_fine - $ora_inizio;

            $days[$scheduling['giorno']] += $duration;
        }

        return $days;

    }







}
