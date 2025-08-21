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
        <div class="conteneur__meta">
            <small>Par <i><?php the_author(); ?></i> — <i><?php echo get_the_date('d M Y'); ?></i></small>
        </div>
        <div class="conteneur__carte__categories">
          <?php 
            $categories = get_the_category();
            $exclude_nom = 'populaire'; // slug de la catégorie à exclure
            if ( ! empty( $categories ) ) {
                $separator = ', ';
                $output = '';

                foreach ( $categories as $category ) {
                  if ( $category->slug !== $exclude_nom ) {
                      $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                  }
                }
            echo trim( $output, $separator );
            }
        ?>
        </div>
        <p class="conteneur__carte__temperature">
          <img src="<?php echo get_template_directory_uri(); ?>/images/temp-min.png" alt="Température minimum">Min :
          <?php the_field('temperature_minimum'); ?> &deg;C
        </p>
        <p class="conteneur__carte__temperature">
          <img src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Température moyenne">Moyenne : 
          <?php the_field('temperature_moyenne'); ?> &deg;C
        </p>
        <p class="conteneur__carte__temperature">
          <img src="<?php echo get_template_directory_uri(); ?>/images/temp-max.png" alt="Température maximum">Max :
          <?php the_field('temperature_maximum'); ?> &deg;C
        </p>
        <p class="carte-unique__description">
          <?php
              /* cette fontion permet d'afficher l'ensemble du contenu (même les images) du post (article ou page)*/
                the_content();
            }
          } ?>
        </p>
      </div>
</section>
<?php get_footer();