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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //First Way
        
           //$request->session()->put(['Hasan'=> 'Brilliant Student']);
        
        //2nd Way
        
           //session(['Ahmed'=> 'Awesome Student']);
        
           
        return $request->session()->all();
        
        //return $request->session()->get('Ornab');
        
        //return session('Ahmed');
        
        //If want delete a specific session
        //return session()->forget('Hasan');
        
        //If want delete all sessions
       // return session()->flush(); 
        
        
        $user = Auth::user();
        
        return view('home', compact('user'));
    }
}
