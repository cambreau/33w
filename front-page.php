<?php get_header(); ?>
<main>
    <section class="hero">
    <?php get_template_part("gabarit/carrousel"); ?>
        
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
        <?php 
            // Afficher les cartes de la catégorie
            afficher_cartes_categorie("populaire");
        ?>
    </div> 
    
    <!-- section rest-api -->
    <section class="destination">
   
        <div class="destination__categories">
            <?php extraire_list_categories("destination"); ?>
        </div>
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
</main>
<?php get_footer(); ?>