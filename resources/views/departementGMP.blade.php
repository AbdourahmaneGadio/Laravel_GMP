@extends('layouts.model')
@section('title','Departement GMP')
@section('content')

    <!-- Présentation -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>Présentation</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
                <iframe class="responsive-iframe m-auto"
                src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p>Le diplômé des départements Génie Mécanique et Productique des I.U.T. est un généraliste de la mécanique.
                Sa formation technique, scientifique, économique et humaine lui permet :

            <ul class="list-disc mt-3 w-11/12 mx-auto">
                <li>D’exercer ses activités dans tous les secteurs économiques,</li>
                <li>De collaborer avec les différents acteurs du système de production,</li>
                <li>De contribuer à la compétitivité des entreprises dans toutes les étapes de la vie
                    d’un produit en optimisant les choix techniques, scientifiques, économiques et humains,
                    en intégrant les impératifs de qualité, de maintenance et de sécurité.</li>
            </ul>
            </p>
        </div>
    </section>
    <!-- Présentation -->
    <!-- Les formations du département GMP -->
    <section class="container w-1/2 mx-auto mt-12">
        <h3>Les formations du département GMP</h3>
        <x-trait-titre> </x-trait-titre>

        <x-lignesLicencesPro.ligneLpMri></x-lignesLicencesPro.ligneLpMri>


        <x-separateur> </x-separateur>


        <x-lignesLicencesPro.ligneLpMief></x-lignesLicencesPro.ligneLpMief>

        <x-separateur> </x-separateur>

        <x-lignesLicencesPro.ligneLpMie></x-lignesLicencesPro.ligneLpMie>



    </section>
@endsection