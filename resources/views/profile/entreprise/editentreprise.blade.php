@extends('layouts.model')
@section('title','Entreprise')
@section('content')


<div class="Ajoutoffre">
    <form action="{{ route('entreprise.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="entreprise_nom" class="block mb-2 font-medium text-gray-700">Nom de l'entreprise</label>
            <input type="text" id="entreprise_nom" name="entreprise_nom" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->entreprise_nom ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
            <input id="email" type="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ $entreprise->email ?? '' }}">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rue" class="block mb-2 font-medium text-gray-700">Rue</label>
            <input type="text" id="rue" name="rue" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->rue ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="code_postal" class="block mb-2 font-medium text-gray-700">Code postal</label>
            <input type="number" id="code_postal" name="code_postal" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->code_postal ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="ville" class="block mb-2 font-medium text-gray-700">Ville</label>
            <input type="text" id="ville" name="ville" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->ville ?? '' }}">
        </div>

        <div class="flex justify-end">
        <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>
<style>
/*FORM*/ 
    .Ajoutoffre {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    text-align: center;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
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
</style>
@endsection