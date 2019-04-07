<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;
use App\model\cse\teacher_experience;
use Auth;

class experienceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('teacher');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        $experiences = teacher_experience::where('teacher_id', '=', $teacher->id)->orderBY('to', 'desc')->get();
        return view('admin.experience.experiencelist', compact('experiences', 'teacher', 'designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        return view('admin.experience.experience', compact('teacher', 'designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $this->validate($request, [
                'designation' => 'required',
                'organization' => 'required',
        ]);

        $experience = new teacher_experience;
        $experience->designation = $request->designation;
        $experience->organization = $request->organization;
        $experience->from = $request->from;
        $experience->to = $request->to;
        $experience->teacher_id = $teacher->id;

        $experience->save();
        
        return redirect(route('experience.index'));
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
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        $experience = teacher_experience::find($id);
        return view('admin.experience.edit', compact('teacher', 'designations', 'experience'));
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
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $this->validate($request, [
                'designation' => 'required',
                'organization' => 'required',
        ]);

        $experience = teacher_experience::find($id);
        $experience->designation = $request->designation;
        $experience->organization = $request->organization;
        $experience->from = $request->from;
        $experience->to = $request->to;
        $experience->teacher_id = $teacher->id;

        $experience->save();
        
        return redirect(route('experience.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        teacher_experience::find($id)->delete();
        return redirect()->back();
    }
}
