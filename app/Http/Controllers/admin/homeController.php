<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\teacher;
use App\model\cse\staff;
use App\model\cse\course;
use App\model\cse\notice;
use App\model\cse\event;
use App\model\cse\news;
use App\model\cse\teacher_designation;
use Auth;

class homeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $teachers = teacher::count('id');
        $staffs = staff::count('id');
        $courses = course::count('id');
        $notices = notice::count('id');
        $events = event::count('id');
        $news = news::count('id');
        $teacher = teacher::where('email', '=', Auth::user()->email)->first();
        $designations = teacher_designation::all();
    	return view('admin.home', compact('teachers', 'staffs', 'courses', 'notices', 'events', 'news', 'teacher', 'designations'));
    }
}
