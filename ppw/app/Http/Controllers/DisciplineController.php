<?php

namespace App\Http\Controllers;

use Validator;
use App\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
//        Test
//        return view('forms/discipline/actions');

        $disciplines = DB::table('disciplines')->get();

        return view('home/mng-activity/discipline/discipline', compact('disciplines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = DB::table('disciplines')->get();
        return view('home/mng-activity/discipline/discipline-create', compact('disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'nome' => 'required|unique:disciplines|max:255',
        ]);

//        dd($request->validated);
        if($validate->fails()){
            return redirect()->route('M311')
                ->withErrors($validate)
                ->withInput();
        }
        else{

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Discipline::class
                );

            $discipline = new Discipline($fields);
            $discipline->save();

//            return redirect()->route('discipline.show',$discipline->id);
            return redirect()->route('M310');
        }

//        new Disicpline();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Discipline $discipline)
    {
        $disciplines = DB::table('disciplines')->get();
        return view('home/mng-activity/discipline/discipline-show',
            compact('disciplines'))
            ->with('discipline', $discipline);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function edit(Discipline $discipline)
    {
        $disciplines = DB::table('disciplines')->get();
        return view('home/mng-activity/discipline/discipline-edit',
            compact('disciplines'))
            ->with('discipline', $discipline);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discipline $discipline)
    {
        $validate = Validator::make($request->all(),[
            'nome' => 'required|unique:disciplines|max:255',
        ]);

        if($validate->fails()){
            return redirect()->route('M313',$discipline->id)
                ->withErrors($validate)
                ->withInput();
        }
        else{

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Discipline::class
            );
//            dd($discipline);
            $discipline->fill($fields)->save();

//            return redirect()->route('discipline.show',$discipline->id);
            return redirect()->route('M310');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        $disciplines = DB::table('disciplines')->get();
//        $nome = $discipline->nome;
        $discipline->delete();
        return view('home/mng-activity/discipline/discipline-delete')
            ->with('discipline', $discipline->nome)
            ->with('disciplines',$disciplines);
    }
}
