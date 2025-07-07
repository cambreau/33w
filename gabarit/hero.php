<?php
/**
 * Template-part hero.php
 * permet d'afficher la section  « Hero »
 */
?>
<?php
$hero_couleur = get_theme_mod('hero_couleur');
$hero_auteur = get_theme_mod('hero_auteur', 'Camille Breau');
$hero_adresse = get_theme_mod('hero_adresse', '2020 rue des maldives');
?>
<style>
    .hero__contenu {
        color: <?= $hero_couleur ?>;
    }
</style>
<div class="hero__contenu">
    <h1 class="hero__titre"><?php bloginfo('name') ?></h1>
    <p class="hero__description">
        <?php bloginfo('description') ?>
    </p>
    <p>Auteur du thème: <?= $hero_auteur ?></p>
    <p>Adresse du club: <?= $hero_adresse ?></p>
    <?php icone_sociaux($hero_couleur) ?>
</div>