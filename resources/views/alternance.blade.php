@extends('layouts.model')
@section('title','Offre d\'alternance')
@section('content')


<section id="section">

@include('layouts.sidebarEntre')


<div class="Ajoutoffre">
  
    <h2 class="text-center">Ajouter une offre d'alternance</h2>

    @if(auth()->check() && auth()->user()->fk_role_id === 6)
    <form action="{{ route('alternance.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Date de début</label>
            <input type="date" name="alternance_date_debut" id="alternance_date_debut" value="{{ old('alternance_date_debut') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_debut')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">Date de fin</label>
            <input type="date" name="alternance_date_fin" id="alternance_date_fin" value="{{ old('alternance_date_fin') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_fin')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_detail" class="block mb-1">Détails</label>
            <textarea name="alternance_detail" id="alternance_detail" rows="4" required class="w-full px-3 py-2 border rounded">{{ old('alternance_detail') }}</textarea>
            @error('alternance_detail')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
    
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Enregistrer</button>
    </form>
    @else
    <form action="{{ route('alternance.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
        <div class="mb-4">
            <label for="alternance_nom" class="block mb-1">Nom</label>
            <input type="text" name="alternance_nom" id="alternance_nom" value="{{ old('alternance_nom') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_nom')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Date de début</label>
            <input type="date" name="alternance_date_debut" id="alternance_date_debut" value="{{ old('alternance_date_debut') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_debut')
            <p class="paragraph">Chère entreprise,

Nous sommes ravis de vous informer que vous pouvez déposer une offre d'alternance en remplissant simplement le formulaire ci-dessous. Cette opportunité vous permettra de former des étudiants motivés tout en bénéficiant de leurs compétences. Nous sommes impatients de travailler avec vous dans le cadre de cette collaboration précieuse.</p>
          <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">Date de fin</label>
            <input type="date" name="alternance_date_fin" id="alternance_date_fin" value="{{ old('alternance_date_fin') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_fin')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_detail" class="block mb-1">Détails</label>
            <textarea name="alternance_detail" id="alternance_detail" rows="4" required class="w-full px-3 py-2 border rounded">{{ old('alternance_detail') }}</textarea>
            @error('alternance_detail')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_rue" class="block mb-1">Rue</label>
            <input type="text" name="alternance_rue" id="alternance_rue" value="{{ old('alternance_rue') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_rue')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_code_postal" class="block mb-1">Code postal</label>
            <input type="number" name="alternance_code_postal" id="alternance_code_postal" value="{{ old('alternance_code_postal') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_code_postal')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_ville" class="block mb-1">Ville</label>
            <input type="text" name="alternance_ville" id="alternance_ville" value="{{ old('alternance_ville') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_ville')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_email" class="block mb-1">Email</label>
            <input type="email" name="alternance_email" id="alternance_email" value="{{ old('alternance_email') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" value="Enregistrer">
        
    </form>
    @endif
</div>
</section>

<style>

    .paragraph {
  font-family: Poppins;
  font-size: 16px;
  color: #333;
  line-height: 1.5;
  margin-bottom: 10px;
}
/*FORM*/ 
    .Ajoutoffre {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    text-align: center;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
    margin: 40px auto;
  }

  .Ajoutoffre h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .Ajoutoffre label {
    display: inline-block;
    width: 100px;
    text-align: left;
    margin-bottom: 10px;
  }

  .Ajoutoffre input[type="text"],
  .Ajoutoffre input[type="number"],
  .Ajoutoffre textarea {
    width: 300px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .Ajoutoffre input[type="submit"] {
    background-color: #606C38;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .Ajoutoffre input[type="submit"]:hover {
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