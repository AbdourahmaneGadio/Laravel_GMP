@extends('layouts.model')
@section('title','Mes notes')
@section('content')

<ul class="listLien">
    <li>ACCUEIL </li>
    <li> > </li>
    <li>ESPACE ETUDIANT </li>
    <li> > </li>
    <li>MESNOTES</li>
</ul>

<section id="section">



    @include('layouts.sidebarEtud')
    <div class="container w-2/3 mx-auto my-4">
        <label>Choisir le semestre</label>

        <select style="   border: none;background: #80808040;width: 20%;" class="semestrechoice">
            <option>S1</option>
            <option>S2</option>
        </select>
        <br>
        <br>

        <table>
            <tr>
                <th scope="col">Matière</th>
                <th scope="col">Note</th>
            </tr>
            @foreach ($notes as $noteActuelle)

            <tr>
                                <!-- Id matière -->

                <td>{{$noteActuelle->fk_note_matiere_id}}</td>
             
                <!-- Valeur note -->
                <td>{{$noteActuelle->note}}</td>

            </tr>
            @endforeach



        </table>



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

    td {
        border: 1px solid grey;
        padding: 17px;

    }

    th {
        border: 1px solid grey;
        padding: 17px;
    }



    .lienFormation h2 {
        color: white;
        position: relative;
        margin: auto 114px;
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