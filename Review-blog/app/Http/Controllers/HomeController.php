<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = blog::all();
        return view('dashboard.home', compact('blog'));
    }
}
