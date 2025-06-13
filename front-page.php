<?php get_header(); ?>
<main>
    <div class="hero">
        <section class="hero__contenu">
            <h1 class="hero__titre">Club de voyage</h1>
            <p class="hero__description">
                Partez à la découverte du monde avec nos séjours soigneusement
                sélectionnés aux quatre coins de la planète.
            </p>
            <p class="hero__description">Auteur: Camille Breau</p>
            <p class="hero__description">info@voyageavecnous.com</p>
            <p class="hero__description">20 rue la prairie, Brossard</p>
            <p class="hero__description">1-800-555-1234</p>
            <button class="hero__bouton">S'inscrire</button>
            <div class="reseaux-sociaux">
                <?php get_template_part('gabarit/icone'); ?>
            </div>
        </section>
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