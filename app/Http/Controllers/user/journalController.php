<?php
namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\cse\notice;
use App\model\cse\event;
use App\model\cse\news;

class journalController extends Controller
{
    public function index()
    {
        $notices = notice::orderBy('created_at', 'desc')->limit(3)->get();
        $events = event::orderBy('created_at', 'desc')->limit(3)->get();
        $news = news::orderBy('created_at', 'desc')->limit(3)->get();
        return view('cse.journal', compact('notices', 'events', 'news'));
    }
}
