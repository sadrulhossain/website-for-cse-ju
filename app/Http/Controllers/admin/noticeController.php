<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\notice;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class noticeController extends Controller
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
        $notices = notice::orderBy('created_at', 'asc')->get();
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        return view('admin.notice.noticelist', compact('notices', 'teacher', 'designations'));
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
        return view('admin.notice.notice', compact('teacher', 'designations'));
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
                'title' => 'required',
                'file_path' => 'required',
        ]);

        if ($request->hasFile('file_path')) {
                $file_path = $request->file_path->store('public/teacher');
        }

        $notice = new notice;
        $notice->title = $request->title;
        $notice->file_path = $file_path;

        $notice->save();
        
        return redirect(route('notice.index'));
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
        $notice = notice::find($id);
        return view('admin.notice.edit', compact('notice', 'teacher', 'designations'));
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
                'title' => 'required',
                'file_path' => 'required',
        ]);

        if ($request->hasFile('file_path')) {
                $file_path = $request->file_path->store('public/teacher');
        }

        $notice = notice::find($id);
        $notice->title = $request->title;
        $notice->file_path = $file_path;

        $notice->save();
        
        return redirect(route('notice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        notice::find($id)->delete();
        return redirect()->back();
    }
}
