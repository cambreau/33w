<?php
function icone_sociaux($couleur)
{
    // pour enle ver le # de la position 0 on extrait à partir de la position 1   
    $couleur = substr($couleur, 1);
?>

    <a class="sociaux" href="https://github.com/eddytuto/33w-ete-25">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://facebook.com">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>

<?php } ?>

<?php 

/**
 * générateur de vague pour séparer deux sections
 */

function vague($couleur_haut, $couleur_bas)
{ ?>
    <style>
        .style-vague {
            position: relative;
            top: 9px;
            background-color: <?= $couleur_haut ?>;
        }
    </style>

    <svg class="style-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
            fill="<?= $couleur_bas ?>"
            fill-opacity="1"
            d="M0,32L80,58.7C160,85,320,139,480,133.3C640,128,800,64,960,53.3C1120,43,1280,85,1360,106.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <?php 
} 


/**
 * Afficher la listes des categories.
 */
function extraire_list_categories($nom_categorie)
{
    //$parent_category_id = get_term_by("slug", $nom_categorie, "category");
    $parent_category = get_category_by_slug($nom_categorie);
    $tableau = array(
        'parent' => $parent_category->term_id,
        'hide_empty' => true
    );
    $list_categories = get_categories($tableau);
    echo "<ul class='destination__categories__list'>";
    foreach ($list_categories as $categorie) {
        echo "<li data-id='" . $categorie->term_id . "'>" . $categorie->name . "</li>";
    }
    echo "</ul>";
}

/**
 * Afficher les cartes d'une categorie. (excluant 'galerie')
 */
function afficher_cartes_categorie($categorie_id = 'populaire') {
    // Si c'est un slug, le convertir en ID
        $categorie = get_category_by_slug($categorie_id);
        if (!$categorie) {
            echo '<p>Aucune catégorie trouvée</p>';
            return;
        }
        $categorie_id = $categorie->term_id;
 
    // Récupérer l'ID de la catégorie galerie pour l'exclure
    $galerie_cat = get_category_by_slug('galerie');
    $galerie_id = ($galerie_cat && is_object($galerie_cat)) ? $galerie_cat->term_id : 0;
 
    // Arguments pour la requête
    $args = array(
        'cat' => intval($categorie_id),
        'posts_per_page' => 10,
        'post_status' => 'publish'
    );
 
    $query = new WP_Query($args);
 
    if ($query->have_posts()) {
        echo '<div class="conteneur">';
       
        while ($query->have_posts()) {
            $query->the_post();
           
            // Vérifier si l'article n'est pas dans la catégorie galerie
            $categories = get_the_category();
            $exclude_galerie = true;
            foreach ($categories as $cat) {
                if ($cat->term_id === $galerie_id) {
                    $exclude_galerie = false;
                    break;
                }
            }
           
            if ($exclude_galerie) {
                // Afficher la carte directement
                afficher_carte_article();
            }
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>Aucun article trouvé dans cette catégorie</p>';
    }
}   


/**
 * Afficher une carte d'article complète
 */
function afficher_carte_article() {
    $lien = "<a class='conteneur__carte__lien' href='" . get_permalink() . "'>Suite</a>";
    
    echo '<article class="conteneur__carte">';
    
    // Gestion de l'image
    if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
    } else {
        // Image par défaut si aucune image n'est définie
        $default_image = get_theme_mod('default_destination_image');
        echo '<img src="' . esc_url($default_image) . '" alt="Image par défaut" width="150" height="150">';
    }
    // Titre
    echo '<h3>' . get_the_title() . '</h3>';
    // Extrait avec lien
    echo '<p>' . wp_trim_words(get_the_excerpt(), 10, $lien) . '</p>';
    // Note client
    echo '<p class="conteneur__carte__note">';
    echo '<img src="' . get_template_directory_uri() . '/images/stars.png" alt="Note Client">Note client : ';
    echo get_field('note_client');
    echo '</p>';
    // Température minimum
    echo '<p class="conteneur__carte__temperature">';
    echo '<img src="' . get_template_directory_uri() . '/images/temp-min.png" alt="Température minimum">Min : ';
    echo get_field('temperature_minimum');
    echo ' °C</p>';
    // Température moyenne
    echo '<p class="conteneur__carte__temperature">';
    echo '<img src="' . get_template_directory_uri() . '/images/temp.png" alt="Température moyenne">Moyenne : ';
    echo get_field('temperature_moyenne');
    echo ' °C</p>';
    // Température maximum
    echo '<p class="conteneur__carte__temperature">';
    echo '<img src="' . get_template_directory_uri() . '/images/temp-max.png" alt="Température maximum">Max : ';
    echo get_field('temperature_maximum');
    echo ' °C</p>';
    // Catégories (excluant 'populaire')
    echo '<div class="conteneur__carte__categories">';
    $categories = get_the_category();
    $populaire = 'populaire';
    $destination ='destination';
    if (!empty($categories)) {
        $separator = ', ';
        $output = '';
        foreach ($categories as $category) {
            if ($category->slug !== $populaire && $category->slug !== $destination) {
                $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>' . $separator;
            }
        }
        echo trim($output, $separator);
    }
    echo '</div>';
    echo '</article>';
}

?>