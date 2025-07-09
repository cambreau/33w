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
    /* créer le champ */
    $wp_customize->add_setting('hero_background_0', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_0', array(
        'label' => __('Image en arrière plan', 'club-voyage'),
        'section' => 'hero_section',
    )));
     // image 1
    /* créer le champ */
    $wp_customize->add_setting('hero_background_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_1', array(
        'label' => __('Image en arrière plan', 'club-voyage'),
        'section' => 'hero_section',
    )));
    // image 2
    /* créer le champ */
    $wp_customize->add_setting('hero_background_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_2', array(
        'label' => __('Image en arrière plan', 'club-voyage'),
        'section' => 'hero_section',
    )));
    // image 1
    /* créer le champ */
    $wp_customize->add_setting('hero_background_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_1', array(
        'label' => __('Image en arrière plan', 'club-voyage'),
        'section' => 'hero_section',
    )));
    // image 2
    /* créer le champ */
    $wp_customize->add_setting('hero_background_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_2', array(
        'label' => __('Image en arrière plan', 'club-voyage'),
        'section' => 'hero_section',
    )));
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