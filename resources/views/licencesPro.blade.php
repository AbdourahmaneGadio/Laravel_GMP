<!doctype html>
<html>

<head>
    <title>Licences professionnelles (L3)</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-medium" style="font-family: Poppins; color:#606C38; background-color: #F5F5F5">

    @include('layouts.header')
    <!-- Licences professionnelles -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>Licences professionnelles (L3)</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
            <iframe class="responsive-iframe m-auto" src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p>La faculté des Sciences et Ingénierie propose des licences professionnelles accessibles après
                la validation de deux années d'études supérieures.
                Elles se préparent en deux semestres et permettent une insertion professionnelle rapide.
            </p>
        </div>
    </section>
    <!-- Licences professionnelles -->
    <!-- Science, technologie, santé -->
    <section class="container w-1/2 mx-auto mt-12">
        <h3>Science, technologie, santé</h3>
        <x-trait-titre> </x-trait-titre>
        <x-lignesLicencesPro.ligneLpMri></x-lignesLicencesPro.ligneLpMri>


        <x-separateur> </x-separateur>


        <x-lignesLicencesPro.ligneLpMief></x-lignesLicencesPro.ligneLpMief>

        <x-separateur> </x-separateur>

        <x-lignesLicencesPro.ligneLpMie></x-lignesLicencesPro.ligneLpMie>



    </section>
    <!-- Science, technologie, santé -->
    @include('layouts.footer')

</body>

</html>