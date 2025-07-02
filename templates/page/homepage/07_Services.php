    <div class="text-xl text-[#D79800] mt-15">Nos Services</div>
<?php
// Définir un tableau de cartes avec les titres, icônes et liens
$cards = [
    ['title' => 'Autodiagnostic cybersécurité', 'icon' => '🛡️', 'text' => [
        'Chez APSecurity, nous sommes de fervents défenseurs de la cybersécurité pour tous.',
        'Que vous soyez artisan ou responsable d’une PME, une mairie, collectivité ou association, celle-ci ne doit pas être un frein, mais une opportunité à votre organisation.'
    ], 'link' => '#autodiagnostic'],
    ['title' => 'Audit cybersécurité', 'icon' => '🔍', 'text' => 'Nos experts cybersécurité audit et évalue votre niveau de maturité de protection des données, révèle les forces et faiblesses de votre organisation et rédige un rapport exhaustif des mesures à mettre en place.', 'link' => '#audit'],
    ['title' => 'Accompagnement cybersécurité', 'icon' => '🤝', 'text' => 'Assistance Maîtrise d’Ouvrage nous vous aidons à définir, piloter et exploiter les projets de cybersécurité', 'link' => '#accompagnement'],
    ['title' => 'Parcours cybersécurité', 'icon' => '📈', 'text' => 'L’objectif est de renforcer votre sécurité au travers de parcours adaptés à vos enjeux et vos besoins. Un pré-diagnostic qui nous permettra d’évaluer le parcours adapté.', 'link' => '#parcours'],
    ['title' => 'Référent cybersécurité externalisé', 'icon' => '👨‍💻', 'text' => 'Sa mission première est de définir la politique de sécurité du SI et de veiller à son application. Le Référent Sécurité du Système Informatique assure un rôle de conseil, d’assistance, d’information, de formation et d’alerte.', 'link' => '#referent']
];
?>

<!-- Structure de la page avec Tailwind CSS -->
<div class="container mx-auto py-10">
    <!-- Flexbox responsive pour les cartes -->
    <div class="flex flex-no-wrap gap-3">
        <?php foreach ($cards as $card): ?>
            <div class="flex flex-col max-w-xs w-full sm:w-1/2 lg:w-1/3 xl:w-1/5 rounded overflow-hidden shadow-lg bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 text-white">
                <div class="p-6 flex flex-col  h-full">
                    <div class="flex flex-col items-center">
                        <!-- <div class="bg-white p-3 rounded-full mb-4">
                            <span class="text-3xl"><?php echo $card['icon']; ?></span>
                        </div> -->
                        <h2 class="text-2xl font-semibold text-center"><?php echo $card['title']; ?></h2>
                    </div>
                    <!-- Textes avec marge spécifique -->
                    <div class="mt-[10px] text-sm space-y-4">
                        <?php 
                            // Si le texte est un tableau (pour la première carte avec plusieurs lignes)
                            if (is_array($card['text'])) {
                                foreach ($card['text'] as $paragraph) {
                                    echo "<p>$paragraph</p>";
                                }
                            } else {
                                // Si c'est une chaîne de texte simple (pour les autres cartes)
                                echo "<p>{$card['text']}</p>";
                            }
                        ?>
                    </div>
                    <div class="mt-6 flex items-end h-full justify-center">
                        <a href="<?php echo $card['link']; ?>" class="inline-block px-6 py-2 text-center text-white bg-[#D79800] rounded-lg shadow hover:bg-[#D79800]/80 transition duration-300">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


