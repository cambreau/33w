<?php

/**
 * configuration des nouveau panneaux du cutomizer
 */

function club_voyage_customize_register($wp_customize)
{
    // Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Héro - Accueil', 'club-voyage'),
        'priority' => 30,
    ));
    //////////////////////  Auteur
    /* configuration du champ */
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Bienvenue sur mon site', 'club-voyage'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur ', 'club-voyage'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    ////////////////////// Adresse
    /* configuration du champ */
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('3800 Sherbrook-est', 'club-voyage'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse ', 'club-voyage'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    ////////////////////// image

    /* Champ : nombre d’images */  
    $wp_customize->add_setting('hero_background_count', array( /**** RENVOIE FORCEMENT UN BOOLEEN */
        'default'           => 3,
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('hero_background_count', array(
        'label'       => __('Nombre d’images du carrousel', 'club-voyage'),
        'section'     => 'hero_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 10,
            'step' => 1,
        ),
    ));

/* Créer TOUS les champs d'images possibles (0 à 9) */
    for ($i = 0; $i < 10; $i++) {
        $setting_id = "hero_background_$i";
        /* créer le champ */
        $wp_customize->add_setting($setting_id, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        /* créer le contrôleur */
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label' => sprintf(__('Image en arrière plan %d', 'club-voyage'), $i + 1),
            'section' => 'hero_section',
        )));
    }

    /////////////////// couleur du texte de la section hero
    ////////////////////// champ couleur
    /* créer le champ */
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'club-voyage'),
        'section' => 'hero_section',
    )));


    ///////////////////////// Ajout du panneau « pied de page »
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section pied de page', 'club-voyage'),
        'priority' => 30,
    ));

     /////////////////// couleur du texte du footer
    ////////////////////// champ couleur
    /* créer le champ */
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('Couleur du texte', 'club-voyage'),
        'section' => 'footer_section',
    )));

}

add_action('customize_register', 'club_voyage_customize_register');

/////////////////// Image par defaut
function theme_customizer_register($wp_customize) {

    // Section Images par defaut
    $wp_customize->add_section('default_images_section', array(
        'title'    => __('Images par défaut', 'ton-theme'),
        'priority' => 30,
    ));

    // Paramètre pour l'image par défaut des destinations
    $wp_customize->add_setting('default_destination_image', array(
        'default'           => '', // tu peux mettre un URL par défaut
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Contrôle de l'image
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'default_destination_image_control',
        array(
            'label'    => __('Image par défaut pour les destinations', 'ton-theme'),
            'section'  => 'default_images_section',
            'settings' => 'default_destination_image',
        )
    ));
}
    add_action('customize_register', 'theme_customizer_register');


// Etape obligatoire car hero_background_count renvoie booleen au lieu du nbr.
/**
 * Ajouter du JavaScript pour masquer/afficher dynamiquement les champs d'images
 */
function club_voyage_customize_controls_js() {
    wp_enqueue_script(
        'club-voyage-customizer',
        get_template_directory_uri() . '/script/customizer.js',
        array('jquery', 'customize-controls'),
        '1.0.0',
        true
    );
}
add_action('customize_controls_enqueue_scripts', 'club_voyage_customize_controls_js');