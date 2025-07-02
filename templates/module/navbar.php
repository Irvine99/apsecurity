<div class="bg-gray-800 p-4 shadow-md">
    <nav class="flex container mx-auto items-center gap-10 items-end  ">
        <!-- Logo ou titre de la page -->
        <div class="text-white font-normal text-xl">
            <a class="bg-[#D79800]/80 rounded-lg p-[6px]" href="#home">Accueil</a>
        </div>
        <div class="relative">
            <button id="dropdownButton" class="text-white hover:text-[#D79800] focus:outline-none transition duration-300">
                Explorer <span class="ml-1">&#x25BC;</span>
            </button>

            <!-- Menu déroulant -->
            <div id="dropdownMenu" class="absolute left-0 hidden bg-gray-700 text-white rounded-md shadow-md mt-2 w-48 z-50">
                <ul class="py-2">
                    <!-- Tu peux ajouter autant de liens que tu veux ici -->
                    <li><a href="#destination1" class="block px-4 py-2 hover:bg-[#D79800] hover:transition ease-in-out duration-500">Destination 1</a></li>
                    <li><a href="#destination2" class="block px-4 py-2 hover:bg-[#D79800] hover:transition ease-in-out duration-500">Destination 2</a></li>
                    <li><a href="#destination3" class="block px-4 py-2 hover:bg-[#D79800] hover:transition ease-in-out duration-500">Destination 3</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script>
    // Récupérer le bouton et le menu déroulant
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Fonction pour ouvrir/fermer le menu
    const toggleDropdown = () => {
        dropdownMenu.classList.toggle('hidden');
        dropdownMenu.classList.toggle('transition-opacity');
        dropdownMenu.classList.toggle('opacity-0');
        dropdownMenu.classList.toggle('opacity-100');
    };

    // Ajouter un événement au bouton
    dropdownButton.addEventListener('click', () => {
        toggleDropdown();
    });

    // Fermer le dropdown si l'utilisateur clique en dehors
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>