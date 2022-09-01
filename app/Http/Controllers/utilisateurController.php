<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\User;

class utilisateurController extends Controller
{
   //cette methode est concu uniquement pour afficher la page d'inscription d'un administrateur
   public function viewForm()
   {
       return view('utilisateur.create');
   }

   public function ayira()
   {
       return view('utilisateur.dashboard');
   }

   public function liste()
   {
      $utilisateurs = utilisateur::all();
       return view('utilisateur.index', compact('utilisateurs'));
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
           $utilisateur = User::create(
               [
                   'nom' => $request['nom'],
                   'email' => $request['email'],
                   'password' => bcrypt($request['password']),
                   'statut' =>'chef mission',
               ]
           );
           if($utilisateur)
           {
               $utilisateur = utilisateur::create(
                   [
                       'matricule' => $request['matricule'],
                       'corps' => $request['corps'],
                       'grade' => $request['grade'],
                       'nom' => $request['nom'],
                       'prenom' => $request['prenom'],
                       'telephone' => $request['telephone'],
                       'email' => $request['email'],
                       'password' => bcrypt($request['password']),
                       'userId' => $utilisateur->id,
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

   public function show($id)
    {
       $utilisateurs = utilisateur::findOrFail($id);
       return view('/utilisateur/show', compact('utilisateurs')); 
    }
}
