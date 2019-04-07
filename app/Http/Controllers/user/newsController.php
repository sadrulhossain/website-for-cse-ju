<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\cse\event;
use App\model\cse\news;
use App\model\cse\notice;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
    * Displaying a listing of the resource
    * 
    * @return Illuminate\Http\Request
    **/

    public function index(){
    	$notices = notice::orderBY('created_at', 'DESC')->limit(3)->get();
    	$events = event::orderBY('created_at', 'DESC')->limit(3)->get();
    	$news = news::orderBY('created_at', 'DESC')->limit(3)->get();
    	$newslist = news::orderBY('created_at', 'DESC')->paginate(5);
    	return view('cse.newslist', compact('notices', 'events', 'news', 'newslist'));

    }

}
