<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unite;
use App\Models\User;

class uniteController extends Controller
{
    //cette methode est concu uniquement pour afficher la page d'inscription d'un administrateur
    public function viewForm()
    {
        return view('unite.create');
    }

    public function ayira()
    {
        return view('unite.dashboard');
    }

    public function liste()
    {
       $unites = unite::all();
        return view('unite.index', compact('unites'));
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
            $unite = User::create(
                [
                    'nom' => $request['nom'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'statut' =>'chef unite',
                ]
            );
            if($unite)
            {
                $unite = unite::create(
                    [
                        'matricule' => $request['matricule'],
                        'corps' => $request['corps'],
                        'grade' => $request['grade'],
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'telephone' => $request['telephone'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'userId' => $unite->id,
                    ]
                    );

                    return redirect('/login');
            }
        }
    }

    public function dashboard()
    {
        return view('unite.dashboard');
    }

    public function show($id)
     {
        $unites = unite::findOrFail($id);
        return view('/unite/show', compact('unites')); 
     }
}
