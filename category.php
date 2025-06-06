<?php 
 /** Modele index.php
  * Modele par default si aucun autre modele n'est trouve.
  */
?>
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
      </h1>---------------- Category.php -----------</h1>
      <!-- C'est une trace pour debugage seulement, a retirer sur la version finale -->

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
          <?php endwhile; ?>
          <?php endif; ?>
          </article>
      </section>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
