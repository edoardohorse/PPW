<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Validator;
use App\Room;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{


    static $path = 'home/mng-activity/room/room';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //        Test
        //        return view('forms/discipline/actions');

        $rooms = $this->fetchAll();

        return view(RoomController::$path, compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = $this->fetchAll();
        return view(RoomController::$path . '-create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nome' => 'required|unique:rooms|max:255'
        ]);

        //        dd($request->validated);
        if ($validate->fails()) {
            return redirect()->route('M341')
                ->withErrors($validate)
                ->withInput();
        } else {

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Room::class
            );


            $room = new Room($fields);
            $room->save();


            return redirect()->route('M340');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $rooms   = $this->fetchAll();

        return view(RoomController::$path.'-show', compact('room', 'rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $rooms = $this->fetchAll();


        return view(RoomController::$path.'-edit', compact('room', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Room $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $validate = Validator::make($request->all(), [
            'nome' => ['required', 'max:255', Rule::unique('rooms')->ignore($room->nome, 'nome')]
        ]);

        if ($validate->fails()) {
            return redirect()->route('M343', $room->id)
                ->withErrors($validate)
                ->withInput();
        } else {

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Room::class
            );
            $room->fill($fields)->save();


            return redirect()->route('M340');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $rooms = $this->fetchAll();

        $room->delete();
        $nome = $room->nome;
        return view(RoomController::$path . '-delete', compact('rooms'))
            ->with('room', $nome);
    }

    protected function fetchAll()
    {
        return DB::table('rooms')->select()->get();
    }

    //    protected function (){

    //}
}