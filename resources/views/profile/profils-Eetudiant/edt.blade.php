@extends('layouts.model')
@section('title','Emploi du temps')
@section('content')


<ul class="listLien">
    <li>ACCUEIL </li>
    <li> > </li>
    <li>ESPACE ETUDIANT </li>
    <li> > </li>
    <li>MON EMPLOI DU TEMPS</li>
</ul>


<section id="section">

    @include('layouts.sidebarEtud')
    <div class="container w-2/3 mx-auto my-4">
        <h1>Emploi du temps étudiant</h1>
        <br>

        <table>
            <tr>
                <th>Heure</th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
            </tr>
            <tr>
                <td>8:00 - 9:30</td>
                <td>Informatique 101</td>
                <td></td>
                <td>Informatique 201</td>
                <td>Informatique 101</td>
                <td></td>
            </tr>
            <tr>
                <td>9:30 - 11:00</td>
                <td>Informatique 101</td>
                <td>Informatique 201</td>
                <td></td>
                <td>Informatique 101</td>
                <td>Informatique 201</td>
            </tr>
            <tr>
                <td>11:00 - 12:30</td>
                <td></td>
                <td></td>
                <td>Informatique 201</td>
                <td>Informatique 101</td>
                <td>Informatique 201</td>
            </tr>
            <tr>
                <td>11:00 - 12:30</td>
                <td></td>
                <td></td>
                <td>Informatique 201</td>
                <td>Informatique 101</td>
                <td>Informatique 201</td>
            </tr>
            <tr>
                <td>11:00 - 12:30</td>
                <td></td>
                <td></td>
                <td>Informatique 201</td>
                <td>Informatique 101</td>
                <td>Informatique 201</td>
            </tr>

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

    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 2px 2px 3px 0 rgba(0, 0, 0, 0.5);
        border-radius: 15px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }



    div.menu {}
</style>
@endsection