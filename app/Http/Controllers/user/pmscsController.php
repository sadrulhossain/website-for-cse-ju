<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\notice;
use App\model\cse\event;
use App\model\cse\news;

class pmscsController extends Controller
{
    public function index()
    {
        $notices = notice::orderBy('created_at', 'desc')->limit(3);
        $events = event::orderBy('created_at', 'desc')->limit(3);
        $news = news::orderBy('created_at', 'desc')->limit(3);
        return view('cse.pmscs', compact('notices', 'events', 'news'));
    }
}
