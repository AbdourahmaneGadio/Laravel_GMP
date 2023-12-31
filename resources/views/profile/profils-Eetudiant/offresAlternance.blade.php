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


<section id="section">

    @include('layouts.sidebarEtud')
    <div class="container w-2/3 mx-auto my-4">
        @foreach ($offresAlternance as $alternance)



        <div style="background-color: #E6E6E6" class="p-8 h-min mb-3 shadow-lg">
            <span style="font-size: 23px;">{{ $alternance->alternance_nom }}</span>
            <div id="nomEntreprise" class="flex">
                <span style="color: blue ; ">{{ $alternance->alternance_ville }}</span> <br>
                <span style="color: #8988BC">{{ $alternance->alternance_rue }}</span><br>
                <span style="color: #8988BC">{{ $alternance->alternance_code_postal }}</span>
            </div>
            <div id="descriptionPoste">
                <div>
                    <span style="font-weight: 500; color:red">Description du poste :</span>
                </div>

                <div>
                    <p>{{ $alternance->alternance_detail }}
                    </p>
                </div>

                <div style="    padding: 2px;
    float: right;">
                    <p>Contactez-nous : <a  href="mailto:{{ Auth::user()->email }}" style="color: #8988BC; text-decoration:underline;">{{ $alternance->alternance_email }}
                        </a>
                    </p>
                </div>mailto:{{ Auth::user()->email }}
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