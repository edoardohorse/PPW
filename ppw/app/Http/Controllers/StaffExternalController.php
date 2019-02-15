<?php

namespace App\Http\Controllers;

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
use App\UserSite;
use Validator;
use Illuminate\Support\Facades\Hash;





class StaffExternalController extends Controller
{
    static $path = 'home/managment/staff/external/external';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->fetchAll();
        return view(StaffExternalController::$path, compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = $this->fetchAll();
        return view(StaffExternalController::$path.'-create', compact('members'));
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
        ]);

        if ($validator->fails()) {
            return redirect()->route('M121')
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
//            $card = new Card($fieldsCard);
//            $card->user_id = $user->id;
//            $card->save();

            $col = new Collaborator();
            $col->esterno = 1;
            $col->user_id = $user->id;
            $col->save();




            return redirect()->route('M120');

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
        $internal       = Internal      ::find($collaborator->id);

        return view(StaffExternalController::$path.'-show',
            compact('members','member','user',
                'collaborator','internal'));
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
        $internal       = Internal      ::find($collaborator->id);

        return view(StaffExternalController::$path.'-edit',
            compact('members','member','user',
                'collaborator','internal'));
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
            'p_iva'                 =>  ['nullable','digits:11',Rule::unique('members')->ignore($member->p_iva, 'p_iva')],
        ]);



        if ($validator->fails()) {
            return redirect()->route('M123',$id)
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
            //            $card->save();



            return redirect()->route('M120');

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
        $members        = $this->fetchAll();

        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);


        $member->delete();

        return view(StaffExternalController::$path.'-delete',
            compact('members','member','user',
                'collaborator','internal'));
    }

    private function fetchAll(){
//            return DB::select('SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,m.scadenza_ass,m.scadenza_cert_med
//    FROM users u,members m,collaborators co
//    WHERE m.id = u.member_id AND u.id = co.user_id
//        AND co.esterno = 1
//    ORDER BY m.id ASC');

        return DB::select('SELECT DISTINCT co.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,m.scadenza_ass,m.scadenza_cert_med
FROM users u,members m,collaborators co
WHERE m.id = u.member_id AND u.id = co.user_id 
AND co.esterno = 1   
AND co.id NOT IN(SELECT t.collaborator_id FROM teachers t)
GROUP BY m.id ');
    }
}
