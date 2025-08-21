<?php
/**
 * Carrousel dynamique généré selon le nombre d'images configuré
 */

// Récupérer le nombre d'images configuré
$nombre_images = get_theme_mod('hero_background_count', 3);

// Générer les divs du carrousel
for ($i = 0; $i < $nombre_images; $i++) {
    $image_url = get_theme_mod('hero_background_' . $i, '');
    $opacity = ($i === 0) ? '1' : '0'; // Première image visible, autres masquées
    
    if (!empty($image_url)) {
        echo '<div class="carrousel" style="background-image: url(\'' . esc_url($image_url) . '\'); opacity:' . $opacity . '"></div>';
    }
}

// Générer les boutons radio pour la navigation
echo '<form class="carrousel__form">';
for ($i = 0; $i < $nombre_images; $i++) {
    $checked = ($i === 0) ? 'checked' : ''; // Premier bouton coché par défaut
    echo '<input type="radio" class="carrousel__radio" name="carrousel__radio" ' . $checked . '>';
}
echo '</form>';
?>
