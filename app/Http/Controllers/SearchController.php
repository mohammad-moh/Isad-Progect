<?php

namespace App\Http\Controllers;

use App\Models\SystemNotify;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {


      $query = $request->get('query');
      $noti = SystemNotify::where('incoming_requests','like','%'.$query.'%')->orderBy('id')->paginate(6);
      return view('blog.index',['notification' => $noti]);
  
        // return view('search.index');
    }
}