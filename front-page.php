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
        <div class="galerie__images">
          <img src="images/image1.jpg" alt="" class="galerie__image" />
          <img src="images/image2.jpg" alt="" class="galerie__image" />
          <img src="images/image3.jpg" alt="" class="galerie__image" />
          <img src="images/image4.jpg" alt="" class="galerie__image" />
          <img src="images/image5.jpg" alt="" class="galerie__image" />
          <img src="images/image6.jpg" alt="" class="galerie__image" />
          <img src="images/image7.jpg" alt="" class="galerie__image" />
          <img src="images/image8.jpg" alt="" class="galerie__image" />
          <img src="images/image9.jpg" alt="" class="galerie__image" />
          <img src="images/image10.jpg" alt="" class="galerie__image" />
        </div>
      </section>
      <section class="populaire">
        <h2 class="populaire__titre">Nos destinations populaires</h2>
        <?php if (have_posts()): 
          while (have_posts()): the_post(); ?>  
          <article class="populaire__article">
          <!-- Boucle WordPress pour afficher les posts -->  
           <?php
           the_post_thumbnail('thumbnail');
  
           ?>
              <h3 class="populaire__article-titre"><?php the_title(); ?></h3>
              <!-- Permet d'afficher le titre principal du post -->
              <div class="populaire__article-contenu">
                <?php 
                $lien = "<a href=" . get_permalink() . ">Suite</a>";
                // Permet de recuperer le lien du post
                // Sur WP tableau de bord > Reglages > Permaliens = "Nom de l'article" alors le lien est de la forme : https://www.monsite.com/nom-de-l-article/
                echo wp_trim_words(get_the_excerpt(), 10,$lien);
                // Affiche un extrait/resume du post, utile pour les articles de blog et on choisit le nombre de mots max. Par defaut, c'est 55 mots.
                // the_content();
                 ?>
                <!-- Permet d'afficher l'ensemble du contenu du post (article ou image) -->
              </div>
            </article>
          <?php endwhile; ?>
          <?php endif; ?>
      </section>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
