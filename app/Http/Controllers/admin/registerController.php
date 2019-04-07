<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\admin;
use App\model\admin\role;
use App\model\admin\admin_role;
use Auth;
use App\model\cse\teacher;
use App\model\cse\teacher_designation;

class registerController extends Controller
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
        $admins = admin::all();
        return view('admin.teacherlist', compact('admins', 'teacher', 'designations'));
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
        $roles = role::all();
        return view('admin.authentic.register', compact('roles', 'teacher', 'designations'));
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
                'role' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
        ]);
        
        $admin = new admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        $admin->role()->sync($request->role);

        $teacher = new teacher;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();
        return redirect(route('admin_register.index'));
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
        $admin = admin::find($id);
        $roles = role::all();
        $admin_role = admin_role::where('admin_id', $id)->first();

        return view('admin.authentic.edit', compact('admin', 'roles', 'teacher', 'designations', 'admin_role'));
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
                'role' => 'required',
        ]);

        
        $admin = admin::find($id);
        $admin->role()->sync($request->role);
        return redirect(route('admin_register.index'));
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
