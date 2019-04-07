<?php

namespace App\Http\Controllers\admin\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;
use App\model\cse\teacher_education;
use Auth;

class educationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('super_admin');
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
        $educations = teacher_education::where('teacher_id', '=', $teacher->id)->get();
        return view('admin.admin.education.educationlist', compact('educations', 'teacher', 'designations'));
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
        return view('admin.admin.education.education', compact('teacher', 'designations'));
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
                'degree' => 'required',
                'institution' => 'required',
        ]);

        $education = new teacher_education;
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->result = $request->result;
        $education->achievement = $request->achievement;
        $education->teacher_id = $teacher->id;

        $education->save();
        
        return redirect(route('admin_education.index'));
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
        $education = teacher_education::find($id);
        return view('admin.admin.education.edit', compact('teacher', 'designations', 'education'));
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
                'degree' => 'required',
                'institution' => 'required',
        ]);

        $education = teacher_education::find($id);
        $education->degree = $request->degree;
        $education->institution = $request->institution;
        $education->result = $request->result;
        $education->achievement = $request->achievement;
        $education->teacher_id = $teacher->id;

        $education->save();
        
        return redirect(route('admin_education.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        teacher_education::find($id)->delete();
        return redirect()->back();
    }
}
