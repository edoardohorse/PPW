<?php

namespace App\Http\Controllers;

use App\Collaborator;
use Illuminate\Validation\Rule;
use Validator;
use App\Course;
use App\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    static $queryAll ="SELECT c.id,c.nome_corso,c.costo_orario,d.nome,c.created_at,c.updated_at FROM disciplines d,courses c WHERE d.id = c.discipline_id ORDER BY c.id";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //        Test
        //        return view('forms/discipline/actions');

        $courses = DB::select(CourseController::$queryAll);

        return view('home/mng-activity/course/course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses        = $this->fetchAll();
        $disciplines    = Discipline::all(['id','nome'])->toArray();
        return view('home/mng-activity/course/course-create', compact('courses','disciplines'));
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
            'nome_corso' => 'required|unique:courses|max:255',
            'costo_orario' => 'required|numeric|between:0,99.99',

        ]);

        //        dd($request->validated);
        if($validate->fails()){
            return redirect()->route('M321')
                ->withErrors($validate)
                ->withInput();
        }
        else{

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Course::class
            );
            $course = new Course($fields);
            $course->save();

            //            return redirect()->route('discipline.show',$course->id);
            return redirect()->route('M320');
        }

        //        new Disicpline();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $courses = $this->fetchAll();
        $disciplines    = Discipline::all(['id','nome'])->toArray();
        $discipline = Discipline::find( $course->discipline_id )->id;
        return view('home/mng-activity/course/course-show',
            compact('courses', 'disciplines'))
            ->with('discipline', $discipline)
            ->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $courses = $this->fetchAll();
        $disciplines    = Discipline::all(['id','nome'])->toArray();
        $discipline = Discipline::find( $course->discipline_id )->id;
        return view('home/mng-activity/course/course-edit',
            compact('courses', 'disciplines'))
            ->with('discipline', $discipline)
            ->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validate = Validator::make($request->all(),[
            'nome_corso' => ['required','max:255', Rule::unique('courses')->ignore($course->nome_corso, 'nome_corso')],
            'costo_orario' => 'required|numeric|between:0,99.99',
            ]);

        if($validate->fails()){
            return redirect()->route('M323',$course->id)
                ->withErrors($validate)
                ->withInput();
        }
        else{

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Course::class
            );
            //            dd($course);
            $course->fill($fields)->save();

            //            return redirect()->route('discipline.show',$course->id);
            return redirect()->route('M320');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $courses = $this->fetchAll();
        $disciplines    = Discipline::all(['id','nome'])->toArray();
        $course->delete();
        $nome = $course->nome_corso;
        return view('home/mng-activity/course/course-delete',compact('courses', 'disciplines'))
            ->with('course', $nome);
    }

    protected function fetchAll(){
        return DB::select(CourseController::$queryAll);
    }
}
