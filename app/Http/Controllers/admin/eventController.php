<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\event;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class eventController extends Controller
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
        $events = event::orderBy('created_at', 'asc')->get();
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
        return view('admin.event.eventlist', compact('events', 'teacher', 'designations'));
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
        return view('admin.event.event', compact('teacher', 'designations'));
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
                'body' => 'required',
                'date' => 'required',
                'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
                $photo = $request->photo->store('public/teacher');
        }

        $event = new event;
        $event->title = $request->title;
        $event->body = $request->body;
        $date = strtotime($request->date);
        $event->date = date("Y-m-d h:i:s", $date);
        $event->photo= $photo;

        $event->save();
        
        return redirect(route('event.index'));
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
        $event = event::find($id);
        return view('admin.notice.edit', compact('event', 'teacher', 'designations'));
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
                'body' => 'required',
                'date' => 'required',
                'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
                $photo = $request->photo->store('public/teacher');
        }

        $event = event::find($id);
        $event->title = $request->title;
        $event->body = $request->body;
        $date = strtotime($request->date);
        $event->date = date("Y-m-d h:i:s", $date);
        $event->photo= $photo;

        $event->save();
        
        return redirect(route('event.index'));
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
