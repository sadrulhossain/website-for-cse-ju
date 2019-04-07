<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\staff;
use App\model\cse\staff_designation;

class adminstaffController extends Controller
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
    public function index()
    {
    	$staffs = staff::orderBy('designation', 'DESC')->paginate(10);
        $designation = staff::join('staff_designations', 'designation', '=', 'staff_designations.id');
        return view('admin.stafflist', compact(['staffs', 'designation']));
    }
}
