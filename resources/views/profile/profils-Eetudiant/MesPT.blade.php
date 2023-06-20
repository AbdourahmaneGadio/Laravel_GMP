@extends('layouts.model')
@section('title','mesProjet tutorés')
@section('content')



<div class="lienFormation">
    <h2>DépartementGMP -Genie Mecanique et Productique</h2>



</div>

<ul class="listLien">
    <li>ACCUEIL </li>
    <li> > </li>
    <li>ESPACE ETUDIANT </li>
    <li> > </li>
    <li>Mes projets tutorés</li>
</ul>


<section id="section">

    @include('layouts.sidebarEtud')

    <div class="container w-2/3 mx-auto my-4">

        <!-- Filtres -->

        <!-- <div class="flex my-5 items-center">
            <span class="me-3">Filtrer par : </span>
            <span class="me-3">Département</span>
            <input type="text" name="inputDeptOffre" id="inputDeptOffre" minlength="5" maxlength="5">
        </div> -->

        <!-- Filtres -->

        <!-- Offres -->

        @foreach ($projets as $projet)
        <div style="background-color: #E6E6E6" class="p-8 h-min mb-3 shadow-lg">

            <div id="nomEntreprise" class="flex">
                <span> <strong style="font-size: 23px;"> ENTREPRISE </strong> :JUNIOR / EXPERIENCED SOFTWARE ENGINEER</span>

            </div>
            <div id="descriptionPoste">
                <div>

                    <span style="font-size:20px; color:blue;">{{ $projet->projet_nom }}</span>
                </div>
            
                <div>
                    <span >Description du projet :</span>
                    <p>{{ $projet->detail }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>



</section>






<style>
    #section {
        min-height: 30vw;
        height: 100%;
        DISPLAY: flex;


    }

    ul.listLien {
        display: flex;
        padding: 18px;
        color: white;
        font-size: 13px;
        border-bottom: 1px solid;
        background: #606c38;
    }

    ul.listLien li {
        padding-left: 11px;
        position: relative;
        left: 7pc;
    }

    .lienFormation {
        background-color: #283618;
        padding: 19px;


    }

    .lienFormation h2 {
        color: white;
        position: relative;
        margin: auto 114px;
    }

    .listMenu {

        width: 18%;
        text-align: left;
        /* height: 100%; */
        background: #606c38;
        color: white;


    }

    .listMenu li {
        border-bottom: 1px solid white;
        padding: 15px;
        text-align: center;

    }


    div.menu {}
</style>
@endsection