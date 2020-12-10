<?php

namespace App\Http\Controllers;


Use App\Auth;
Use App\Blogs;
use App\Events;
use Illuminate\support\Facades\Hash;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
     public function about_us()
     {
        return view('about_us');
     }
    
     public function showblog()
      {
       $blog = Blogs::all();
       return view('blog-page')->with(compact('blog'));
     }

      public function showEventDetails($id)
    {
        $event = Events::find($id);
        return view('event_details')->with(compact('event'));
    }

}
