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
                    <div class="card-header">{{ __('Création d\'un enseignant') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.enseignant') }}">
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
                            <div class="w-full max-w-md">
                                <label for="matiere" class="block text-sm font-medium text-gray-700">Matière</label>
                                <select id="matiere" name="matiere" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                  <option value="informatique">Informatique</option>
                                  <option value="mecanique">Mécanique</option>
                                  <option value="electronique">Électronique</option>
                                </select>
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