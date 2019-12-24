<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Auth::logout();
    return view('home');
    }
    public function cours()
    {
        return view('courses');
    }
    public function detailscours()
    {
        return view('detailscours');
    }
    public function elements()
    {
        return view('element');
    }
    public function blog()
    {
        return view('blog');
    }
    public function single()
    {
        return view('single');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
