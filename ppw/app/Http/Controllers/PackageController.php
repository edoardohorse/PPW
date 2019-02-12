<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Validator;
use App\Package;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{

    static $queryAll = "SELECT p.id,p.nome_pacchetto,p.prezzo,c.nome_corso,p.created_at,p.updated_at FROM packages p,package_course pc,courses c WHERE c.id = pc.course_id ORDER BY p.id";
    static $path = 'home/mng-activity/package/package';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //        Test
        //        return view('forms/discipline/actions');

        $packages = $this->fetchAll();

        return view(PackageController::$path, compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = $this->fetchAll();
        $courses =  Course::all(['id', 'nome_corso'])->toArray();
        return view(PackageController::$path . '-create', compact('packages', 'courses'));
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
            'nome_pacchetto' => 'required|unique:packages|max:255',
            'prezzo' => 'required|numeric|between:0,99.99',

        ]);

        //        dd($request->validated);
        if ($validate->fails()) {
            return redirect()->route('M331')
                ->withErrors($validate)
                ->withInput();
        } else {

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Package::class
            );


            $package = new Package($fields);
            $package->save();


            $courses_id = Course::find($request->courses, ['id'])->toArray();

            $courses = [];
            foreach ($courses_id as $course) {
                array_push($courses, $course['id']);
            }
            //            dd($courses);
            $package->course()->attach($courses);


            //            return redirect()->route('discipline.show',$package->id);
            return redirect()->route('M330');
        }

        //        new Disicpline();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        $packages   = $this->fetchAll();
        $courses_assigned       = Package::find($package->id)->course()->get(['id','nome_corso'])->toArray();
        $tmp                    = Package::find($package->id)->course()->get(['id'])->toArray();


        $courses_assigned_id = [];
        foreach ($tmp as $course) {
            array_push($courses_assigned_id, $course['id']);
        }

        return view(PackageController::$path.'-show', compact('package', 'packages'))
            ->with('courses',$courses_assigned)
            ->with('courses_id',$courses_assigned_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $packages = $this->fetchAll();

        $courses    = Course::all(['id','nome_corso'])->toArray();
        $tmp        = Package::find($package->id)->course()->get(['id'])->toArray();


        $coursesAssignedId = [];
        foreach ($tmp as $course) {
            array_push($coursesAssignedId, $course['id']);
        }


        return view(PackageController::$path.'-edit', compact('package', 'packages'))
            ->with('courses',$courses)
            ->with('courses_id',$coursesAssignedId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $validate = Validator::make($request->all(), [
            'nome_pacchetto' => ['required', 'max:255', Rule::unique('packages')->ignore($package->nome_pacchetto, 'nome_pacchetto')],
            'prezzo' => 'required|numeric|between:0,99.99',
        ]);

        if ($validate->fails()) {
            return redirect()->route('M333', $package->id)
                ->withErrors($validate)
                ->withInput();
        } else {

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Package::class
            );
            $tmp = $package->course()->get(['id'])->toArray();

            $coursesAssigned = [];
            foreach ($tmp as $course) {
                array_push($coursesAssigned, $course['id']);
            }

            $flippedC = array_flip($coursesAssigned);
            $flipperR = array_flip($request->courses);

            $courseIdToRemove=  array_flip(array_diff_key($flippedC, $flipperR));

            $package->course()->detach($courseIdToRemove);
            $package->fill($fields)->save();


            return redirect()->route('M330');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $packages = $this->fetchAll();
        $courses = DB::table('courses')->select('id', 'nome_corso')->get()->toArray();
        $package->delete();
        $nome = $package->nome_pacchetto;
        return view(PackageController::$path . '-delete', compact('packages', 'courses'))
            ->with('package', $nome);
    }

    protected function fetchAll()
    {
        return DB::table('packages')->select('id', 'nome_pacchetto', 'prezzo', 'created_at', 'updated_at')->get();
    }

//    protected function (){

//}
}