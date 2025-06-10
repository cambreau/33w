<?php 
 /** Modele index.php
  * Modele par default si aucun autre modele n'est trouve.
  */
?>
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
    </h1>---------------- index.php -----------</h1>
      <!-- C'est une trace pour debugage seulement, a retirer sur la version finale -->
      <section class="populaire">
        <h2 class="populaire__titre">Nos destinations populaires</h2>
        <div class="populaire__conteneur-articles">
          <?php if (have_posts()): 
            while (have_posts()): the_post(); 
          ?> 
            <article class="populaire__article">
                <!-- Boucle WordPress pour afficher les posts -->  
                <?php
                the_post_thumbnail('thumbnail');
                ?>
                <h3 class="populaire__article-titre"><?php the_title(); ?></h3>
                <!-- Permet d'afficher le titre principal du post -->
                <div class="populaire__article-contenu">
                  <?php the_content(); ?>
                  <!-- Permet d'afficher l'ensemble du contenu du post (article ou image) -->
                </div>
            </article>
          <?php endwhile; ?>
         <?php endif; ?>
        </div>
      </section>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
