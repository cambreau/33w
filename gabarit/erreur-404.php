<?php
$bg_image   = get_theme_mod('page404_background', '');
$title      = get_theme_mod('page404_title', 'Erreur 404 !');
$title_color= get_theme_mod('page404_title_color', '#060324');
$message    = get_theme_mod('page404_message', 'Erreur 404 !');
$text_color = get_theme_mod('page404_color', '#060324');
$button_color = get_theme_mod('page404_button_color', '#66bcbc');
$search_color = get_theme_mod('page404_search_color', '#66bcbc');
$button_text_color = get_theme_mod('page404_button_text_color', '#060324');
?>

<style>
    .erreur-404__titre {
        color: <?= $title_color ?>;
    }

    .erreur-404__message{
        color: <?= $text_color ?>;
    }

    .erreur-404__btn{
        background-color:<?= $button_color ?>;
        color:<?= $button_text_color ?>;
    }

    .erreur-404__lien .menu li a{
        background-color:<?= $button_color ?>;
    }

    .erreur-404__recherche input[type="search"]{
        color: <?= $search_color ?>;
    }

    .erreur-404__recherche input[type="search"]::placeholder{
        color: <?= $search_color ?>;
    }

</style>

<div class="erreur-404" style="
    background: url('<?php echo esc_url($bg_image); ?>')">
    <h1 class="erreur-404__titre">
        <?= $title ?>
    </h1>

    <p class="erreur-404__message">
        <?= $message ?>
    </p>

     <!-- Bouton Retour Accueil -->
     <a href="<?php echo esc_url(home_url('/')); ?>" class="erreur-404__btn">
        Retour à l'accueil
    </a>

    <div class="erreur-404__lien">
                <?php wp_nav_menu(array(
                    "menu" => "erreur-404",
                    "container" => "nav"
                )) ?>
    </div>

    <div class="erreur-404__recherche">
        <?php get_search_form(); ?>
    </div>


</div>