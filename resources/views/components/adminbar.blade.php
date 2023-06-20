<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <!-- Logo ou titre -->
        <div class="flex-shrink-0">
          <a href="/" class="text-white font-bold text-xl">Panel administrateur</a>
        </div>
  
        <!-- Liens de navigation -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <!-- Création avec sous-menus -->
            <div class="relative">
              <button type="button" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium focus:outline-none" id="creationButton">
                Création
              </button>
              <div class="hidden absolute z-10 mt-2 w-40 bg-white rounded-md shadow-lg" id="creationMenu">
                <div class="py-1">
                   <!-- Sous-menu Enseignant -->
                   <a href="{{url('admin/creationenseignant')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Enseignant</a>
                   <!-- Sous-menu Entreprise -->
                   <a href="{{url('admin/creationentreprise')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Entreprise</a>
                   <!-- Sous-menu Étudiant -->
                   <a href="{{url('admin/creationetudiant')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Étudiant</a>
                </div>
              </div>
            </div>
  
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projet tutoré</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Alternance</a>
  
            <!-- Utilisateur avec sous-menus -->
            <div class="relative">
              <button type="button" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium focus:outline-none" id="utilisateurButton">
                Utilisateur
              </button>
              <div class="hidden absolute z-10 mt-2 w-40 bg-white rounded-md shadow-lg" id="utilisateurMenu">
                <div class="py-1">
                  <!-- Sous-menu Enseignant -->
                  <a href="{{url('admin/enseignant')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Enseignant</a>
                  <!-- Sous-menu Entreprise -->
                  <a href="{{url('admin/entreprise')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Entreprise</a>
                  <!-- Sous-menu Étudiant -->
                  <a href="{{url('admin/etudiant')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Étudiant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  