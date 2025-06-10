<?php
function mon_theme_supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );
function theme_tp_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css'); 
wp_enqueue_style('style', get_stylesheet_uri()); 
} 
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
  $query->set( 'category_name', 'Populaire' );
  $query->set( 'orderby', 'title' );
  $query->set( 'order', 'ASC' );
  }
 }
 add_action( 'pre_get_posts', 'modifie_requete_principal' );

/*
Explications :

- theme_tp_enqueue_styles() : fonction qui insère les liens CSS dans la source HTML, remplace les balises <link> classiques.

- add_action() : c'est un système de hooks (un peu comme un EventListener) qui dit à WordPress d’exécuter ta fonction à un moment précis (ici lors de wp_enqueue_scripts).

- wp_enqueue_scripts : hook déclenché dans wp_head() qui permet de charger tous les scripts et styles.

- wp_enqueue_style() : méthode officielle WordPress pour charger les styles, plus sûre et flexible que de mettre des <link> en dur dans header.php.

- Les fonctions appelées dans add_action doivent être passées en chaîne de caractères (entre quotes '').
*/

?>

