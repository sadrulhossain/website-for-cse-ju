<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\cse\event;
use App\model\cse\news;
use App\model\cse\notice;
use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function index(){
    	$noticeboard = notice::orderBy('created_at', 'desc')->paginate(5);
    	$notices = notice::orderBy('created_at', 'desc')->limit(3)->get();
        $events = event::orderBy('created_at', 'desc')->limit(3)->get();
        $news = news::orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('cse.noticeboard', compact('notices', 'events', 'news', 'noticeboard'));
    }
}
