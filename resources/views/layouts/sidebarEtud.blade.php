<ul class="listMenu">
    <li class="{{ (request()->is('Ajoutnotes')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Ajoutnotes')}}">Notes</a>
    </li>
    <li class="{{ (request()->is('edtprofs')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('edtprofs')}}">Emploi de temps</a>
    </li>
    </li>
    <li class="{{ (request()->is('supportCours')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('supportCours')}}">Support de cours</a>
    </li>

    </li>
</ul>
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
        height: 100%;
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