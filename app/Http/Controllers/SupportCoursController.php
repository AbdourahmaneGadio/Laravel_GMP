<?php

namespace App\Http\Controllers;

use App\Models\Cour;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SupportCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matieres = DB::table('matiere')->get();

        return view('profile.Profil-Enseignant.supportCours', [
            'matieresCours' => $matieres,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Ajout du fichier sur le serveur
        $file = $request->file('pdf');
        // $fileName = $request->$file->getClientOriginalName();
        $fileName = 'fichierTest.pdf';
        $filePath = 'uploads/' . $fileName; // storage/app/public/uploads/

        Storage::disk('public')->put($filePath, file_get_contents($file));

        //  Store data in database
        Cour::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(cours $cours, $idClasse)
    // {
    //     $cours = DB::table('cours')->where('idCours', $idClasse)->get();
    //     return $cours;
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(cours $cours)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, cours $cours)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(cours $cours)
    // {
    //     //
    // }
}
