<?php

namespace App\Http\Controllers;

use App\Http\Requests\FounderFormRequest;
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
    public function store(FounderFormRequest $request)
    {

        $validator = Validator::make($request->all(), $request->rules());

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
            $fieldsUser['tipo'] = 'fondatore';
            //            dd($fieldsUser );
            $user = new User($fieldsUser);
            $user->save();


            $fieldsCard = BootController::filterFieldsRequestFromFillable($fields, Card::class);
            $fieldsCard['user_id'] = $user->id;
            //            var_dump($fieldsCard);
            $card = new Card($fieldsCard);
            $card->save();


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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function fetchAll(){
        return DB::select('SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,collaborators co,internals i 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = i.collaborator_id AND co.esterno = 0 
 ORDER BY m.id ASC ');
    }
}
