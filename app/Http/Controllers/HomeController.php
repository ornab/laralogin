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
        
        
    /**
     *   First Way for initialize a session
     *
     */
        
       
        //$request->session()->put(['Hasan'=> 'Brilliant Student']);
        
    /**
     *   second Way for initialize a session
     *
     */
        
        //session(['Ahmed'=> 'Awesome Student']);
        
          
    /**
     *    get all session data
     *
     */
        
        //return $request->session()->all();
        
    /**
     *    1st way of getting a specific session data
     *
     */
        
        //return $request->session()->get('Ornab');
        
    /**
     *    2nd way of getting a specific session data
     *
     */
        
        //return session('Ahmed');
        
    /**
     *    If want delete a specific session
     *
     */ 
        
        
      //return session()->forget('Hasan');
        
        
    /**
     *    If want delete all sessions
     *
     */     
        
       // return session()->flush(); 
        
        
    /**
     *  Flashing Data (It is similar to session but it stays just for one request & mostly used when we ask for a feedback 
     *
     *  from a user)
     *
     */
        
        
//        $request->session()->flash('message', 'Post has been created');
//        
//        return $request->session()->get('message');
//        
            
    /**
     *   Use Reflash -> If you want to keep data for a little longer
     *
     */ 
        
        $request->session()->reflash();
        
    /**
     *   Use Keep -> If you want to keep a specific data for a little longer & delete everything else
     *
     */ 
        
        $request->session()->keep('message');
        
    
        $user = Auth::user();
        
        return view('home', compact('user'));
    }
}
