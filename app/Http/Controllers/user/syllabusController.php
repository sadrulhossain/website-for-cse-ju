<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\course;
use App\model\cse\notice;
use App\model\cse\event;
use App\model\cse\news;

class syllabusController extends Controller
{
    public function index()
    {
        
        $notices = notice::orderBy('created_at', 'desc')->limit(3)->get();
        $events = event::orderBy('created_at', 'desc')->limit(3)->get();
        $news = news::orderBy('created_at', 'desc')->limit(3)->get();
        return view('cse.syllabus', compact('notices', 'events', 'news'));
    }

    public function show(Request $request){

        $notices = notice::orderBy('created_at', 'desc')->limit(3)->get();
        $events = event::orderBy('created_at', 'desc')->limit(3)->get();
        $news = news::orderBy('created_at', 'desc')->limit(3)->get();
        $this->validate($request, [
                'year' => 'required',
                'semester' => 'required',
        ]);
        $year = $request->year;
        $semester = $request->semester;
        $courses = course::where([
                                    ['year', '=', $year],
                                    ['semester', '=', $semester]
                        ])->orderBy('year', 'ASC')
                        ->orderBy('semester', 'ASC')
                        ->orderBy('course_code', 'ASC')->get();
        $total_credit = course::where([
                                    ['year', '=', $year],
                                    ['semester', '=', $semester]
                        ])->sum('credit');
        
        return view('cse.courses', compact('courses', 'year', 'semester', 'total_credit', 'notices', 'events', 'news')); 
    }
    
}
