<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mission;
use App\Models\vehicule;
use App\Models\chefMission;
use App\Models\chefUnite;
use App\Models\User;

class missionController extends Controller
{
     //cette methode est concu uniquement pour afficher la page d'inscription d'un administrateur
     public function viewForm()
     {
        $vehicule = vehicule::all();
        $chefmission = chefMission::all();
        $unite = chefUnite::all();
         return view('mission.create',compact('vehicule','chefmission','chefunite'));
     }
 
     public function ayira()
     {
        $missions = mission::all();
         return view('mission.dashboard', compact('missions'));
     }
     public function liste()
     {
        $missions = mission::all();
         return view('mission.index', compact('missions'));
     }
     
     public function create(Request $request)
     {
         // ici nous allons definir les normes qui doivent respecté nos differents choses
         $verification = $request->validate(
             [
                 'intitule' => ['required','string', 'max:25'],
                 'lieu' => ['required','string', 'max:100'],
                 'duree' => ['required','string', 'max:100'],
                 'date_depart' => ['required','date'],
                 'date_retour' => ['required','date'],
                 'unite' => ['required','Biginteger'],
                 'chefmission' => ['required','Biginteger'],
                 'vehicule' => ['required','Biginteger'],
                 
             ]
         );
         // ici nous allons definir les actions a faire si la verification est bonne
         if( $verification)
         {
             // nous allons créer un utilisateur avec les données saisie par l'utilisateur
            
             {
                 $mission = mission::create(
                     [
                         
                         'intitule' => $request['intitule'],
                         'lieu' => $request['lieu'],
                         'duree' => $request['duree'],
                         'date_depart' => $request['date_depart'],
                         'date_retour' => $request['date_retour'],
                         'vehicule' => $request['vehicule'],
                         'chefmission' => $request['chefmission'],
                         'unite' => bcrypt($request['unite']),
                        
                     ]
                     );
 
                     return redirect('/login');
             }
         }
     }

     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([

            'matricule' => ['required','string', 'max:25'],
            'corps' => ['required','string', 'max:100'],
            'grade' => ['required','string', 'max:100'],
            'nom' => ['required','string', 'max:100'],
            'prenom' => ['required','string', 'max:150'],
            'telephone' => ['required','string', 'max:25'],
            'email' => ['required','string', 'max:100'],
            'password' => ['required','string','min:8','max:20','confirmed'],  
        ]);

        mission::whereId($id)->update($validatedData);
     }
 
     public function dashboard()
     {
         return view('mission.dashboard');
     }

     public function show($id)
     {
        $missions = mission::findOrFail($id);
        return view('/mission/show', compact('missions')); 
     }

     public function edit($id)
     {
        $missions = mission::findOrFail($id);
        return view('mission.edit2', compact('missions')); 
     }
}
