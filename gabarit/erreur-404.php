<?php
$bg_image   = get_theme_mod('page404_background', '');
$title      = get_theme_mod('page404_title', 'Erreur 404 !');
$title_color= get_theme_mod('page404_title_color', '#060324');
$message    = get_theme_mod('page404_message', 'Erreur 404 !');
$text_color = get_theme_mod('page404_color', '#060324');
?>

<style>
    .erreur-404__titre {
        color: <?= $title_color ?>;
    }

    .erreur-404__message{
        color: <?= $text_color ?>;
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

</div>