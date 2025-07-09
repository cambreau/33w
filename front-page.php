<?php get_header(); ?>
<main>
    <section class="hero">
        <?php
            $hero_background[0] = get_theme_mod("hero_background_0");
            $hero_background[1] = get_theme_mod("hero_background_1");
            $hero_background[2] = get_theme_mod("hero_background_2");
        ?>
         <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
         <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
         <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>

         <form class="carrousel__form">
            <input type="radio" class="carrousel__radio" name="carrousel__radio">
            <input type="radio" class="carrousel__radio" name="carrousel__radio">
            <input type="radio" class="carrousel__radio" name="carrousel__radio">
        </form>
        <?php get_template_part("gabarit/hero"); ?>
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
    </section>
    <div class="conteneur global">
        <?php get_template_part("gabarit/populaire"); ?> 
    </div> 
</main>
<?php get_footer(); ?>