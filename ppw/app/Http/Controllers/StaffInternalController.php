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





class StaffInternalController extends Controller
{
    static $path = 'home/managment/staff/internal/internal';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = $this->fetchAll();
        return view(StaffInternalController::$path, compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = $this->fetchAll();
        return view(StaffInternalController::$path.'-create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $member         = Member        ::find($id);
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);

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
            'cod_fiscale'           =>  ['required','size:16',Rule::unique('members')->ignore($member->cod_fiscale, 'cod_fiscale')],
            'numero_cell'           =>   ['regex:/[0-9]{9}/',Rule::unique('members')->ignore($member->numero_cell, 'numero_cell')],
            'numero_tel'            =>  ['regex:/[0-9]{9}/',Rule::unique('members')->ignore($member->numero_tel, 'numero_tel')],

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
            'p_iva'                 =>  ['nullable','digits:11',Rule::unique('members')->ignore($member->p_iva, 'members')],
        ]);

        if ($validator->fails()) {
            return redirect()->route('M111')
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        } else {
            //            dd($req->validated());

            $asd_id = Asd::find(1)->first()->id;
            $fields = $request->all();
            //            var_dump($fields);


            $fieldsUserSite = BootController::filterFieldsRequestFromFillable($fields, UserSite::class);
            $userSite = new UserSite($fieldsUserSite);
            $userSite->password = Hash::make($fieldsUserSite['password']);
            $userSite->save();


            $fieldsMember = BootController::filterFieldsRequestFromFillable($fields, Member::class);
            //            var_dump($fieldsMember);
            $fieldsMember['user_site_id'] = $userSite->id;
            $member = new Member($fieldsMember);
            $member->save();
            $member->asd()->attach($asd_id);


            $fieldsUser = BootController::filterFieldsRequestFromFillable($fields, User::class);
            $fieldsUser['member_id'] = $member->id;
            $fieldsUser['tipo'] = 'allievo';
            //            dd($fieldsUser );
            $user = new User($fieldsUser);
            $user->save();


            $fieldsCard = BootController::filterFieldsRequestFromFillable($fields, Card::class);
            $fieldsCard['user_id'] = $user->id;
            //            var_dump($fieldsCard);
//            $card = new Card($fieldsCard);
//            $card->user_id = $user->id;
//            $card->save();

            $col = new Collaborator();
            $col->esterno = 0;
            $col->user_id = $user->id;
            $col->save();

            $int = new Internal();
            $int->collaborator_id = $col->id;
            $int->save();


            return redirect()->route('M110');

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
        $usersite       = Member        ::find($id)->user_site()->first();
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);

        return view(StaffInternalController::$path.'-show',
            compact('members','member','user',
                'collaborator','internal','usersite'));
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
        $usersite       = Member        ::find($id)->user_site()->first();
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);

        return view(StaffInternalController::$path.'-edit',
            compact('members','member','user',
                'collaborator','internal','usersite'));
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
//        dd($id);
        $member         = Member        ::find($id);
        $usersite       = Member        ::find($id)->user_site()->first();
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

            // Password field (step 2)
            'email'                 =>  ['email', Rule::unique('users_site')->ignore($usersite->email, 'email')],
            'password_conf'         =>  'same:password',

            'note'                  =>  'nullable|string|max:250',

            // Member fields (step 3)
            'data_stipula_ass'      =>  'date',
            'scadenza_ass'          =>  'date|after:data_stipula_ass',
            'numero_ass'            =>  'numeric',
            'data_cert_medico'      =>  'date',
            'scadenza_cert_med'     =>  'date|after:data_cert_medico',
            'p_iva'                 =>  ['nullable','digits:11',Rule::unique('members')->ignore($member->p_iva, 'p_iva')],
        ]);



        if ($validator->fails()) {
            return redirect()->route('M113',$id)
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        } else {
            //            dd($req->validated());


            $asd_id = Asd::find(1)->first()->id;
            $fields = $request->all();
            //            var_dump($fields);

            $fieldsUserSite = BootController::filterFieldsRequestFromFillable($fields, UserSite::class);

//            dd($fieldsUserSite);
            if($fieldsUserSite['password'] != null){
                $usersite->password = Hash::make($fieldsUserSite['password']);
            }

            $usersite->email = $fieldsUserSite['email'];
            $usersite->save();


            $fieldsMember = BootController::filterFieldsRequestFromFillable($fields, Member::class);
            //            var_dump($fieldsMember);
            $fieldsMember['user_site_id'] = $usersite->id;

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



            return redirect()->route('M110');

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
        $usersite       = Member        ::find($id)->user_site()->first();
        $user           = User          ::where('member_id','=',$member->id)->first();
        $collaborator   = Collaborator  ::where('user_id','=',$user->id)->first();
        $internal       = Internal      ::find($collaborator->id);

        $id = $member->user_site_id;
        $member->delete();
        UserSite::find($id)->delete();

        return view(StaffInternalController::$path.'-delete',
            compact('members','member','user',
                'collaborator','internal','usersite'));
    }

    private function fetchAll(){
        return DB::select('SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,members m,collaborators co,internals i 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = i.collaborator_id AND co.esterno = 0 
 ORDER BY m.id ASC ');
    }
}
