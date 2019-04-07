<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\staff;
use App\model\cse\staff_designation;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class staffController extends Controller
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
        $staffs = staff::orderBy('designation', 'asc')->get();
        $st_designations = staff_designation::all();
        return view('admin.staff.stafflist', compact('staffs', 'st_designations', 'teacher', 'designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $st_designations = staff_designation::all();
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        return view('admin.staff.staff', compact('st_designations', 'teacher', 'designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'designation' => 'required',
                'experience' => 'required',
                'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
                $photo = $request->photo->store('public/teacher');
        }

        $staff = new staff;
        $staff->name = $request->name;
        $staff->designation = $request->designation;
        $staff->photo = $photo;
        $staff->experience = $request->experience;

        $staff->save();
        
        return redirect(route('staff.index'));
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
        $staff = staff::find($id);
        $st_designations = staff_designation::all();
        return view('admin.staff.edit', compact('staff', 'st_designations', 'teacher', 'designations'));
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
                'experience' => 'required',
                'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
                $photo = $request->photo->store('public/teacher');
        }

        $staff = staff::find($id);
        $staff->name = $request->name;
        $staff->designation = $request->designation;
        $staff->photo= $photo;
        $staff->experience = $request->experience;

        $staff->save();
        
        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        staff::find($id)->delete();
        return redirect()->back();
    }
}
