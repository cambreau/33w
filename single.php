<?php

/**
 * le modèle single.php
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>
<section class="carte-unique">
  <?php if (have_posts()) {
    while (have_posts()) {
      /* affiche l'image « mise en avant » miniature */
      the_post();
      the_post_thumbnail('large');
  ?>
      <h1><?php
          /* affiche le titre pricipal du « post » */
          the_title(); ?></h1>
      <div class="carte-unique__categories">
          <?php the_category(); ?></div>
      <p class="carte-unique__description">
  <?php
      /* cette fontion permet d'afficher l'ensemble du contenu (même les images) du post (article ou page)*/
        the_content();
    }
  } ?></p>
</section>
<?php get_footer();