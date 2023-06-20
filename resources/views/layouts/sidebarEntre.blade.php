<ul class="listMenu">
    <li class="{{ (request()->is('alternance')) ? ' ' : '' }}">
        <a href="{{url('alternance')}}">Ajouter une offre d'alternance</a>
    </li>
    <li class="{{ (request()->is('projet')) ? ' ' : '' }}">
        <a href="{{url('projet')}}"> Ajouter un projet tutoré</a>
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