<?php

use App\Http\Controllers\AlternanceController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SupportCours;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\projetController;
use App\Http\Controllers\SupportCoursController;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/formation', function () {
    return view('licencesPro.lpMie');
});

Route::get('/mentionslegales', function () {
    return view('mentionslegales');
});


Route::get('/gmp', function () {
    return view('departementGMP');
});
/*profil -Espace Etudiant*/
Route::get('/edt', function () {
    return view('profile.profils-Eetudiant.edt');
});

Route::get('/Mesnotes', function () {
    return view('profile.profils-Eetudiant.Mesnotes');
});
Route::get('/offresAlterance', function () {
    return view('profile.profils-Eetudiant.offresAlterance');
});

/*Fin de la partie Ee */

/*profil -Espace Enseignant*/
Route::get('/Ajoutnotes', [NoteController::class, 'index'])->name('Ajoutnotes.index');


Route::post('/Ajoutnotes', [NoteController::class, 'create'])->name('Ajoutnotes.add');

Route::get('/Ajoutnotes/showClasse{idClasse}', [NoteController::class, 'show'])->name('Ajoutnotes.show');

// ajouter le SupportCours 

Route::get('/supportCours', [SupportCoursController::class, 'index'])->name('supportCours.index');


Route::post('/supportCours', [SupportCoursController::class, 'create'])->name('supportCours.add');

/*Fin de la partie ajouter Cours */

Route::get('/edtprofs', function () {
    return view('profile.Profil-Enseignant.edtprofs');
});

/*Fin de la partie Ee */

Route::get('/licencesPro', function () {
    return view('licencesPro');
});

Route::get('/lpMief', function () {
    return view('licencesPro.lpMief');
});

Route::get('/lpMri', function () {
    return view('licencesPro.lpMri');
});

Route::get('/lpMie', function () {
    return view('licencesPro.lpMie');
});

/*Debut Alternance*/

Route::post('/alternance', [AlternanceController::class, 'store'])->name('alternance.store');

Route::get('/offresAlternance', [AlternanceController::class, 'index'])->name('offreAlternance.store');

// Route::get('/offresAlternance', function () {
//     return view('profile.profils-Eetudiant.offresAlternance');
// });
/*FinAlternance */


Route::post('/alternance', [AlternanceController::class, 'store'])->name('alternance.store');

Route::get('/offresAlternance', [AlternanceController::class, 'index'])->name('offreAlternance.store');


/* partie Projet */
Route::post('/MesPT', [projetController::class, 'store'])->name('MesPT.store');

Route::get('/MesPT', [projetController::class, 'index'])->name('MesPT.store');



Route::get('/projet', function (){
    return view('projet');
});

/*Espace etudiant */

Route::get('/edt', function () { 
    return view('profile.profils-Eetudiant.edt');
});
// Route::get('/MesPT', function () { 
//     return view('profile.profils-Eetudiant.MesPT');
// });

Route::get('/Mesnotes', function () {
    return view('profile.profils-Eetudiant.Mesnotes');
});

Route::get('/Mescandidatures', function () {
    return view('profile.profils-Eetudiant.Mescandidatures');
});
/* */



Route::middleware('profil.entreprise')->group(function (){
    Route::get('/profil/entreprise',[EntrepriseController::class, 'show']);

    Route::post('profil/entreprise/edit', [EntrepriseController::class, 'store'])->name('entreprise.store');
    Route::get('profil/entreprise/edit', [EntrepriseController::class, 'showedit']);

});