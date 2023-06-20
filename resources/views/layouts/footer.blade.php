<!-- Footer -->
<footer class="bg-white text-white" style="font-family: Poppins; font-size:medium;">

    <!-- Section de l'université -->
    <section class="flex space-x-3 p-9 justify-between" style="background-color: #606C38">
        <!-- Différents sites -->

        <div>

            <div>
                <span class="font-extrabold">NOS DIFFÉRENTS SITES
                </span>
            </div>
            <div class="mt-2"><span class="font-extrabold">
                    Site d’Évry</span></div>
            <div>
                <span>
                    25 cours Monseigneur Roméro </span>
            </div>
            <div>
                <span>
                    91000 Évry</span>
            </div>

            <div class="mt-2"><span class="font-extrabold">
                    Site de Brétigny</span> </div>
            <div> <span>
                    Chemin de la Tuilerie
                </span> </div>
            <div> <span>
                    91220 Brétigny-sur-Orge</span>
            </div>
            <div class="mt-2">
                <span class="font-extrabold">Site de Juvisy</span>
            </div>
            <div> <span>6 rue Piver – Parc de la Mairie</span> </div>
            <div><span>91260 Juvisy-sur-Orge</span>
            </div>
        </div>
        <!-- Différents sites -->

        <!-- Navigation -->
        <div class="font-extrabold">
            <div><span>NAVIGATION</span>
            </div>

            <div class="mt-3"> <a href="{{ url('/') }}">
                    <span>IUT</span></a></div>


            <div class="mt-3"> <a href="{{ url('/') }}">
                    <span>FORMATION</span></a>
            </div>

            <div class="mt-3"> <a href="{{ url('/') }}">
                    <span>ESPACE ENTREPRISE</span></a></div>


            <div class="mt-3"> <a href="{{ url('/') }}">
                    <span>ESPACE ENSEIGNANT</span></a></div>

            <div class="mt-3">
                <a href="{{ url('/') }}">

                    <span>ESPACE ÉTUDIANT</span></a>
            </div>


            
        </div>
        <!-- Navigation -->


        <!-- Logo URL:asset('assets/images/logo/logo_gmp.png') -->

        <div>
            <img src="{{URL::asset('assets/images/logo/Logo_white.png')}}" alt="Logo GMP" srcset="" class="logo_footer">
        </div>
        <!-- Logo -->



    </section>
    <!-- Section de l'université -->

    <!-- Section du copyright -->
    <section class="flex p-7 justify-between" style="background-color: #283618">
        <!-- Copyright -->
        <div>
            Copyright © 2023 IUT d’Évry Val d’Essonne
        </div>
        <!-- Copyright -->
        <!-- Mentions légales -->

        <div><a href="{{ url('/mentionslegales') }}">
                <span class="hover:font-bold">
                    Contact – Mentions légales</span></a>
        </div>
        <!-- Mentions légales -->
    </section>
    <!-- Section du copyright -->

</footer>
<!-- Footer -->

<!-- Taille logo -->
<style>
    .logo_footer {
        height: 200px; /* Ajuste la valeur pour augmenter ou réduire la taille du logo */
    }
</style>
<!-- Taille logo -->