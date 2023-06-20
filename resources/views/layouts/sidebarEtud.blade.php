<ul class="listMenu">
    <li class="{{ (request()->is('Mesnotes')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Mesnotes')}}">Mes notes </a>
    </li>
    <li class="{{ (request()->is('edt')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('edt')}}"> Mon emploi de temps </a>
    </li>
    <li class="{{ (request()->is('MesPT')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('MesPT')}}">Mes projets tutorés </a>
    </li>
    <li class="{{ (request()->is('offresAlternance')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('offresAlternance')}}">Les offres d'alternance </a>
    </li>
    <li class="{{ (request()->is('Mescandidatures')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Mescandidatures')}}">Mes candidatures</a>
    </li>
</ul>
<style>
 
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
        height: revert;

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