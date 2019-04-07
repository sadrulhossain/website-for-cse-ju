<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class teacherController extends Controller
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
        return view('admin.teacher.teacherlist', compact('teacher', 'designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $teacher = teacher::find($id);
        $designations = teacher_designation::all();
        return view('admin.teacher.edit', compact('teacher', 'designations'));
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
        $this->validate($request, [
                'name' => 'required',
                'designation' => 'required',
                'mobile' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'fax' => 'required',
                'interest' => 'required',
                'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
                $photo = $request->photo->store('public/teacher');
        }

        $teacher = teacher::find($id);
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->mobile = $request->mobile;
        $teacher->phone = $request->phone;
        $teacher->photo= $photo;

        $teacher->email = $request->email;
        $teacher->fax = $request->fax;
        $teacher->interest = $request->interest;

        $teacher->save();
        
        return redirect(route('teacher.index'));
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
}
