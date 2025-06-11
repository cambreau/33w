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
   <?php get_footer(); ?> 
