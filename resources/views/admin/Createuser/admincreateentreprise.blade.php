@extends('layouts.model')

@section('title','Création utilisateur')
@section('content')
<x-adminbar/>
<x-guest-layout>
    <!-- Session Status -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'une entreprise') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.entreprise') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="user_name" style="    width: 100%;" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="name" autofocus placeholder="Entrez votre prénom">
    
                                    @error('user_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Nom de famille') }}</label>
    
                                <div class="col-md-6">
                                    <input id="user_firstname" style="    width: 100%;" type="text" class="form-control @error('firstname') is-invalid @enderror" name="user_firstname" value="{{ old('user_firstname') }}" required autocomplete="firstname" autofocus placeholder="Entrez votre nom de famille">
    
                                    @error('user_firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" style="    width: 100%;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Entrez votre mail">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                              
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" style="    width: 100%;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Entrez votre mot de passer">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input style="width: 100%;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez votre mot de passe">
                                </div>
                            </div>
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
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button style="    background: #606c38;
    color: white;
    padding: 14px;
    border-radius: 3px;
    width: 100%;" type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>



@endsection