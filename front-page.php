<?php get_header(); ?>
<main>
    <div class="hero">
    <section class="hero" style="background-image: url('<?= get_template_directory_uri() ?>/images/maldives.jpg');">
    <?php get_template_part("gabarit/hero"); ?>
    <?php get_template_part("gabarit/populaire"); ?>
        <form class="inscription-form" action="">
            <div class="inscription-form__label-input">
                <label class="inscription__label" for="nom">Nom</label>
                <input class="inscription-form__input" id="nom" type="text" placeholder="Entrez votre nom" />
            </div>
            <div class="inscription-form__label-input">
                <label class="inscription-form__label" for="prenom">Prénom</label>
                <input class="inscription-form__input" id="prenom" type="text" placeholder="Entrez votre prénom" />
            </div>
            <div class="inscription-form__label-input">
                <label class="inscription__label" for="courriel">Courriel</label>
                <input class="inscription-form__input" id="courriel" type="email" placeholder="Entrez votre courriel" />
            </div>
            <div class="inscription-form__label-input">
                <label class="inscription-form__label" for="telephone">Téléphone</label>
                <input class="inscription-form__input" id="telephone" type="text" placeholder="Entrez votre téléphone" pattern="^\d{3}-\d{3}-\d{4}$" />
            </div>
            <div class="inscription-form__bouton-container">
                <button class="inscription-form__bouton">S'inscrire</button>
            </div>
        </form>
    </div>

    <div class="conteneur global">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                if (in_category('galerie')) {
                    get_template_part("gabarit/galerie");
                } else {
                    get_template_part("gabarit/carte");
                }
            }
        } ?>
    </div>
</main>
<?php get_footer(); ?>