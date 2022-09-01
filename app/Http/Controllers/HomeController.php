<?php

namespace App\Http\Controllers;

use App\Models\chefMission;
use App\Models\chefUnite;
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
            $unite = chefUnite::where ('userId', $user->id)->first();
            return view ('utilisateur.dash',compact('unite'));
        }

        elseif($user->statut == 'chef de mission')
        {
            $mission = chefMission::where ('userId', $user->id)->first();

            return view ('mission.dashboard',compact('mission'));

        }

        else
        {
          return view('/home');  
        }
       
    
    }
}
