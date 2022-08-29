<?php

namespace App\Http\Controllers;

use App\Models\mission;
use App\Models\unite;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();

        
        if($user->statut == 'chef unite')
        {
            $unite = unite::where ('userId', $user->id)->first();
            return view ('unite.dashboard',compact('unite'));
        }

        elseif($user->statut == 'chef de mission')
        {
            $mission = mission::where ('userId', $user->id)->first();

            return view ('mission.dashboard',compact('mission'));

        }

        else
        {
          return view('/home');  
        }
       
    
    }
}
