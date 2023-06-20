<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\User;
use App\Models\Etudiant;
use App\Models\Enseignant;
use Illuminate\Support\Facades\Hash;

class CreateController extends Controller
{
    public function Createenseignant(Request $request) {
        
        
        
        $request->validate([
            'user_nom' => 'required|string',
            'user_first' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'matiere'=> 'required|string',
        ]);

        if ($request->input('matiere') == "informatique"){
           
            $user = new User;
            $user->user_name = $request->input('user_name');
            $user->user_firstname = $request->input('user_firstname');
            $user->email  = $request->input('email') ;
            $user->password = Hash::make($request->input('password'));
            $user->fk_role_id= 4;
            $enseignant = new Enseignant;
            $enseignant->fk_enseignant_matiere_id = 1;
            $enseignant->fk_enseignant_user_id=$user->id;
            $enseignant ->save();
        }
        if ($request->input('matiere') == "mecanique"){
           
            $user = new User;
            $user->user_name = $request->input('user_name');
            $user->user_firstname = $request->input('user_firstname');
            $user->email  = $request->input('email') ;
            $user->password = Hash::make($request->input('password'));
            $user->fk_role_id= 4;
            $enseignant = new Enseignant;
            $enseignant->fk_enseignant_matiere_id = 2;
            $enseignant->fk_enseignant_user_id=$user->id;
            $enseignant ->save();
        }
        if ($request->input('matiere') == "electronique"){
           
            $user = new User;
            $user->user_name = $request->input('user_name');
            $user->user_firstname = $request->input('user_firstname');
            $user->email  = $request->input('email') ;
            $user->password = Hash::make($request->input('password'));
            $user->fk_role_id= 4;
            $enseignant = new Enseignant;
            $enseignant->fk_enseignant_matiere_id = 3;
            $enseignant->fk_enseignant_user_id=$user->id;
            $enseignant ->save();
           
        }
       
        return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    }
    
    public function Createetudiant(Request $request) {
        $request->validate([
            'user_nom' => 'required|string',
            'user_first' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

    
        $user = new User;
        $user->user_name = $request->input('user_name');
        $user->user_firstname = $request->input('user_firstname');
        $user->email  = $request->input('email') ;
        $user->password = Hash::make($request->input('password'));
        $user->fk_role_id = 5;
        $user->save();
    
        $etudiant = new Etudiant;
        $etudiant->fk_enseignant_matiere_id = 1;
        $etudiant->fk_etudiant_user_id = $user->id;
        $etudiant->save();

        return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    }

    public function Createentreprise(Request $request) {
        
        
        $request->validate([
            'user_nom' => 'required|string',
            'user_first' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'entreprise_nom' => 'required|string',
            'rue' => 'required|string',
            'code_postal' => 'required|integer',
            'ville' => 'required|string',
        ]);
            $user = new User;
            $user->user_name = $request->input('user_name');
            $user->user_firstname = $request->input('user_firstname');
            $user->email  = $request->input('email') ;
            $user->password = Hash::make($request->input('password'));
            $user->fk_role_id= 6;
            $user->save();

            $entreprise = new Entreprise;
            $entreprise->entreprise_nom = $request->entreprise_nom;
            $entreprise->email = $request->email;
            $entreprise->rue = $request->rue;
            $entreprise->code_postal = $request->code_postal;
            $entreprise->ville = $request->ville;
            $entreprise->fk_entreprise_user_id=$user->id;
            $entreprise ->save();
       
            return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    }
}