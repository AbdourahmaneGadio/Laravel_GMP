<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    public function store(Request $request)
    {
        $id = auth()->id();
        $request->validate([
            'entreprise_nom' => 'required|string',
            'rue' => 'required|string',
            'code_postal' => 'required|integer',
            'ville' => 'required|string',
        ]);

        $entreprise = new Entreprise;
        $entreprise->entreprise_nom = $request->entreprise_nom;
        $entreprise->rue = $request->rue;
        $entreprise->code_postal = $request->code_postal;
        $entreprise->ville = $request->ville;
        $entreprise->fk_entreprise_user_id = $id ;

        $entreprise->save();

        return redirect()->to('profil/entreprise')->with('success', 'L\'entreprise a été enregistrée avec succès.');
    }

    public function show() {

        $id = auth()->id();

        $entreprise = Entreprise::where('fk_entreprise_user_id', $id)->first();

        return view('profile.entreprise.entreprise', compact('entreprise'));
    }
        
}