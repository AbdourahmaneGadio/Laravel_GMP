@extends('layouts.model')
@section('title','Offre d\'alternance')
@section('content')


    <ul class="listLien">
        <li>ACCUEIL </li>
        <li> > </li>
        <li>ESPACE ETUDIANT </li>
        <li> > </li>
        <li>OFFRE D'ALTERNANCE</li>
    </ul>


    <section>

        <ul class="listMenu">
            <li>Mes Notes </li>
            <li> Mon emploi de temps </li>
            <li>Mes projets tutorés </li>
            <li style="background:white; color:#606c38;"> Les offres d'Aletrnance</li>
            <li>Mes candidature</li>
        </ul>










    </section>











<style>
    section {
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
        left: 7pc;
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