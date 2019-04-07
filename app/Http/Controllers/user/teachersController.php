<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\cse\event;
use App\model\cse\journal;
use App\model\cse\journal_type;
use App\model\cse\news;
use App\model\cse\notice;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;
use App\model\cse\teacher_education;
use App\model\cse\teacher_experience;
use Illuminate\Http\Request;


class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = teacher::orderBy('designation', 'asc')->get();
        $designations = teacher_designation::all();
        $educations = teacher_education::all();
        $notices = notice::orderBy('created_at', 'desc')->limit(3)->get();
        $events = event::orderBy('created_at', 'desc')->limit(3)->get();
        $news = news::orderBy('created_at', 'desc')->limit(3)->get();
        return view('cse.faculty.teacher.teachers', compact('teachers', 'designations', 'notices', 'events', 'news', 'educations'));
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
        $teacher = teacher::find($id);
        $designations = teacher_designation::all();
        $jtypes = journal_type::all();
        $educations = teacher_education::where('teacher_id', $teacher->id)->get();
        $experiences = teacher_experience::where('teacher_id', $teacher->id)->where('to', 'desc')->get();
        $journals = journal::where('teacher_id', $teacher->id)->get();
        return view('cse.faculty.teacher.teacher', compact('teacher', 'designations', 'educations', 'journals', 'experiences', 'jtypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
