<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\course;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class courseController extends Controller
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
        $courses = course::orderBy('year', 'ASC')->orderBy('semester', 'ASC')->orderBy('course_code', 'ASC')->paginate(25);
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        return view('admin.course.courselist', compact('courses', 'teacher', 'designations'));
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
        return view('admin.course.course', compact('teacher', 'designations'));
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
                'course_title' => 'required',
                'course_code' => 'required',
                'year' => 'required',
                'semester' => 'required',
                'credit' => 'required',
        ]);

        $course = new course;
        $course->course_title = $request->course_title;
        $course->course_code = $request->course_code;
        $course->year = $request->year;
        $course->semester = $request->semester;
        $course->level = $request->year.' Year '.$request->semester.' Semester';
        $course->credit = $request->credit;
        $course->save();
        
        return redirect(route('course.index'));
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
        $course = course::find($id);
        return view('admin.course.edit', compact('course', 'teacher', 'designations'));
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
                'course_title' => 'required',
                'course_code' => 'required',
                'year' => 'required',
                'semester' => 'required',
                'credit' => 'required',
        ]);

        $course = course::find($id);
        $course->course_title = $request->course_title;
        $course->course_code = $request->course_code;
        $course->year = $request->year;
        $course->semester = $request->semester;
        $course->level = $request->year.' Year '.$request->semester.' Semester';
        $course->credit = $request->credit;
        $course->save();
        
        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        course::find($id)->delete();
        return redirect()->back();
    }
}
