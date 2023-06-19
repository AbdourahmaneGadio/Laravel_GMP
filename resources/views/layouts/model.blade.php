<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </head>
    <body>
       
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-start items-center mx-auto max-w-screen-xl p-4">
                <a href="{{ url('/') }}" >  <img  src="{{URL::asset('assets/images/logo/logo_iut_gmp.png')}}" class="h-20" alt="Logo" />
                    @if (auth()->check()) </a>
                  
                    <button href="{{ route('register') }}" type="button" data-dropdown-toggle="dropdownauth" data-modal-toggle="authentication-modal-entreprise" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">{{ auth()->user()->user_name }}</button>
                    <x-dropdownauth/>
                    @else
                    <a href="{{ route('register') }}" type="button" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">S'inscrire</a>
                    <a href="{{ route('login') }}" type="button" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Se connecter</a>
                     @endif
            </div>
        </nav>
        

       
        <nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-between">
            <div>
                <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                    <li>
                        <a href="{{url('gmp')}}" class="text-[#606C38] dark:text-white hover:underline" aria-current="page">IUT</a>
                    </li>
                    <li>
                        <a href="{{url('licencesPro')}}" class="text-[#BC6C25] dark:text-white hover:underline">FORMATION</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('but_gmp')}}" class="text-[#BC6C25] dark:text-white hover:underline">BUT GMP</a>
                            </li>
                            <li>
                                <a href="{{url('lp_mie')}}" class="text-[#BC6C25] dark:text-white hover:underline">LP MIE</a>
                            </li>
                            <li>
                                <a href="{{url('lp_mief')}}" class="text-[#BC6C25] dark:text-white hover:underline">LP MIEF</a>
                            </li>
                            <li>
                                <a href="{{url('lp_mri')}}" class="text-[#BC6C25] dark:text-white hover:underline">LP MRI</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">ESPACE ENTREPRISE</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('projet')}}" class="text-[#BC6C25] dark:text-white hover:underline">Projet tutoré</a>
                            </li>
                            <li>
                                <a href="{{url('alternance')}}" class="text-[#BC6C25] dark:text-white hover:underline">Offres d'alternance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">ESPACE ENSEIGNANT</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('notes')}}" class="text-[#BC6C25] dark:text-white hover:underline">Notes</a>
                            </li>
                            <li>
                                <a href="{{url('emploi_temps')}}" class="text-[#BC6C25] dark:text-white hover:underline">Emploi du temps</a>
                            </li>
                            <li>
                                <a href="{{url('support_cours')}}" class="text-[#BC6C25] dark:text-white hover:underline">Support de cours</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">ESPACE ÉTUDIANT</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('notes')}}" class="text-[#BC6C25] dark:text-white hover:underline">Notes</a>
                            </li>
                            <li>
                                <a href="{{url('emploi_temps')}}" class="text-[#BC6C25] dark:text-white hover:underline">Emploi du temps</a>
                            </li>
                            <li>
                                <a href="{{url('candidatures')}}" class="text-[#BC6C25] dark:text-white hover:underline">Candidatures</a>
                            </li>
                            <li>
                                <a href="{{url('projet_tutore')}}" class="text-[#BC6C25] dark:text-white hover:underline">Projet tutorés</a>
                            </li>
                            <li>
                                <a href="{{url('offres_alternance')}}" class="text-[#BC6C25] dark:text-white hover:underline">Offres d'alternance</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <x-zondicon-search  class="text-[#BC6C25] w-5"/>
            </div>
        </div>
    </div>
</nav>
        <div class="bg-[#283618] p-7 text-white text-2xl ">
            Département GMP – Génie Mécanique et Productique
        </div>
        <nav class="bg-[#606C38] p-3 text-white text-lg border-white border-t-2 border-b-2 ">
            ACCEUIL
        </nav>
        @yield('content')
        @include('layouts.footer')


<style>
/* Style pour les sous-menus */
.sub-menu {
  display: none; /* Cacher les sous-menus par défaut */
  position: absolute;
  background-color: #fff; /* Couleur de fond des sous-menus */
  padding: 8px;
  min-width: 150px;
  z-index: 1;
}

/* Afficher les sous-menus lors du survol */
li:hover .sub-menu {
  display: block;
}
</style>        
