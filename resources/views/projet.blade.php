@extends('layouts.model')
@section('title','Ajouter un projet tutoré')
@section('content')

<section id="section">
@include('layouts.sidebarEntre')

<div class="Ajoutprojet">
    <h2 class="text-center">Ajouter un projet tutoré</h2>
   

   
    <form action="{{ route('projet.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Nom du projet</label>
            <input type="text" name="projet_nom" id="projet_nom" value="" required class="w-full px-3 py-2 border rounded">
            @error('projet_nom')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">Description</label>
            <textarea type="date" name="detail" id="detail" value="detail" required class="w-full px-3 py-2 border rounded"></textarea>
            @error('description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

    
    
        <input type="submit" value="Enregistrer">
    </form>
   

</div>
</section>

<style>
/*FORM*/ 
    .Ajoutprojet {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    text-align: center;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
    margin: 40px auto;
  }

  .Ajoutprojet h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .Ajoutprojet label {
    display: inline-block;
    width: 150px;
    text-align: left;
    margin-bottom: 10px;
  }

  .Ajoutprojet input[type="text"],
  .Ajoutprojet input[type="number"],
  .Ajoutprojet textarea {
    width: 300px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .Ajoutprojet input[type="submit"] {
    background-color: #606C38;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .Ajoutprojet input[type="submit"]:hover {
    background-color: #BC6C25;
  }
/*FIN FORM*/ 
#section {
        min-height: 1vw;
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