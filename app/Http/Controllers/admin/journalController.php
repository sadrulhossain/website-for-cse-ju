<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;
use App\model\cse\journal;
use App\model\cse\journal_type;
use Auth;

class journalController extends Controller
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
        $journals = journal::where('teacher_id', '=', $teacher->id)->get();
        $jtypes = journal_type::all();
        return view('admin.journal.journallist', compact('journals', 'teacher', 'designations', 'jtypes'));
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
        $jtypes = journal_type::all();
        return view('admin.journal.journal', compact('teacher', 'designations', 'jtypes'));
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
                'title' => 'required',
                'type' => 'required',
                'status' => 'required',
        ]);

        $journal = new journal;
        $journal->title = $request->title;
        $journal->url = $request->url;
        $journal->description = $request->description;
        $journal->type = $request->type;
        $journal->status = $request->status;
        $journal->teacher_id = $teacher->id;

        $journal->save();
        
        return redirect(route('journal.index'));
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
        $journal = journal::find($id);
        $jtypes = journal_type::all();
        return view('admin.journal.edit', compact('teacher', 'designations', 'journal', 'jtypes'));
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
                'title' => 'required',
                'type' => 'required',
                'status' => 'required',
        ]);

        $journal = journal::find($id);
        $journal->title = $request->title;
        $journal->url = $request->url;
        $journal->description = $request->description;
        $journal->type = $request->type;
        $journal->status = $request->status;
        $journal->teacher_id = $teacher->id;

        $journal->save();
        
        return redirect(route('journal.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        journal::find($id)->delete();
        return redirect()->back();
    }
}
