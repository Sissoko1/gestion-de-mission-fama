<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mission;
use App\Models\User;

class missionController extends Controller
{
     //cette methode est concu uniquement pour afficher la page d'inscription d'un administrateur
     public function viewForm()
     {
         return view('mission.create');
     }
 
     public function ayira()
     {
         return view('mission.dashboard');
     }
 
     public function create(Request $request)
     {
         // ici nous definir les normes qui doivent respecté nos differents choses
         $verification = $request->validate(
             [
                 'matricule' => ['required','string', 'max:25'],
                 'corps' => ['required','string', 'max:100'],
                 'grade' => ['required','string', 'max:100'],
                 'nom' => ['required','string', 'max:100'],
                 'prenom' => ['required','string', 'max:150'],
                 'telephone' => ['required','string', 'max:25'],
                 'email' => ['required','string', 'max:100'],
                 'password' => ['required','string','min:8','max:20','confirmed'],
                 
             ]
         );
         // ici nous allons definir les actions a faire si la verification est bonne
         if( $verification)
         {
             // nous allons créer un utilisateur avec les données saisie par l'utilisateur
             $mission = User::create(
                 [
                     
                     'nom' => $request['nom'],
                     'email' => $request['email'],
                     'password' => bcrypt($request['password']),
                     'statut' =>'chef de mission',
                 ]
             );
             if($mission)
             {
                 $mission = mission::create(
                     [
                         
                         'matricule' => $request['matricule'],
                         'corps' => $request['corps'],
                         'grade' => $request['grade'],
                         'nom' => $request['nom'],
                         'prenom' => $request['prenom'],
                         'telephone' => $request['telephone'],
                         'email' => $request['email'],
                         'password' => bcrypt($request['password']),
                         'userId' => $mission->id,
                     ]
                     );
 
                     return redirect('/login');
             }
         }
     }
 
     public function dashboard()
     {
         return view('mission.dashboard');
     }
}
