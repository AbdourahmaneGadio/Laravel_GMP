<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AfficheUserController extends Controller
{
    public function Afficheetudiant()
    {
        $users = User::where('fk_role_id',5)->get();
        
        return view('admin.user.listetudiant', compact('users'));
    }
    public function Afficheenseignant()
    {
        $users = User::where('fk_role_id',4)->get();
        
        return view('admin.user.listenseignant', compact('users'));
    }
    public function Afficheentreprise()
    {
        $users = User::where('fk_role_id',6)->get();
        
        return view('admin.user.listentreprise', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.adminaccueil')->with('success', 'Utilisateur supprimé avec succès.');
    }
}