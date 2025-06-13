<?php 
 /** Modele index.php
  * Modele par default si aucun autre modele n'est trouve.
  */
?>
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
      <div class="conteneur">
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
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
