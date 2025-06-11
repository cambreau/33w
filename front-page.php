 <?php 
 /** Modele front-page.php
  * Ce fichier est le modèle de la page d'accueil du thème WordPress.
  * Il est utilisé pour afficher le contenu de la page d'accueil du site.
  * Lorsqu'on arrive sur le site ou lorsqu'on clic sur le logo.
  */
  ?>

 <?php get_header(); ?>
   <!-- Recupere le header -->
   <main>
      <div class="hero">
        <h1>---------------- Front-page.php -----------</h1>
        <!-- C'est une trace pour debugage seulement, a retirer sur la version finale -->
        <section class="hero__contenu">
          <h1 class="hero__titre">Club de voyage</h1>
          <p class="hero__description">
            Partez à la découverte du monde avec nos séjours soigneusement
            sélectionnés aux quatre coins de la planète.
          </p>
          <p class="hero__description">info@voyageavecnous.com</p>
          <p class="hero__description">20 rue la prairie, Brossard</p>
          <p class="hero__description">1-800-555-1234</p>
          <button class="hero__bouton">S'inscrire</button>
          <div class="reseaux-sociaux">
            <a href="https://www.facebook.com/">
              <img src="images/facebook.png" width="40" height="40" />
            </a>
            <a href="https://www.instagram.com/">
              <img src="images/instagram.png" width="40" height="40" />
            </a>
          </div>
        </section>
        <form class="inscription-form" action="">
          <div class="inscription-form__label-input">
            <label class="inscription__label" for="nom">Nom</label>
            <input
              class="inscription-form__input"
              id="nom"
              type="text"
              placeholder="Entrez votre nom"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription-form__label" for="prenom">Prénom</label>
            <input
              class="inscription-form__input"
              id="prenom"
              type="text"
              placeholder="Entrez votre prénom"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription__label" for="courriel">Courriel</label>
            <input
              class="inscription-form__input"
              id="courriel"
              type="email"
              placeholder="Entrez votre courriel"
            />
          </div>
          <div class="inscription-form__label-input">
            <label class="inscription-form__label" for="telephone"
              >Téléphone</label
            >
            <input
              class="inscription-form__input"
              id="telephone"
              type="text"
              placeholder="Entrez votre téléphone"
              pattern="^\d{3}-\d{3}-\d{4}$"
            />
          </div>
          <div class="inscription-form__bouton-container">
            <button class="inscription-form__bouton">S'inscrire</button>
          </div>
        </form>
      </div>
      <section class="galerie">
        <h2 class="galerie__titre">Nos destinations favorites</h2>
        <div class="galerie__image">
            <?php if (have_posts()) {
            while (have_posts()) {
              the_post();
              if (in_category('galerie')) {
              get_template_part("gabarit/galerie");
              }
            }
            } ?>
         </div>
      </section>
      <section class="populaire">
        <h2>Nos destinations populaires</h2>
        <div class="carte__conteneur">
          <?php 
          if (have_posts()): 
          ?>
          <?php 
            if (have_posts()) {
              while (have_posts()) {
                the_post();
          ?>
                <?php
                if (!in_category('galerie')) {
                  get_template_part("gabarit/carte");
                ?>
          <?php
                }
              }
            } 
          endif;
          ?>
        </div>
      </section>
   </main>
   <!-- Recupere le footer -->
    <?php get_footer();?>