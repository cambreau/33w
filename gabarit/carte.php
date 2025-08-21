<?php

/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */
$lien = "<a class='conteneur__carte__lien' href=" . get_permalink() . ">Suite</a>";

?>  
<article class="conteneur__carte">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php echo wp_trim_words(get_the_excerpt(), 10, $lien); ?></p>
    <p class="conteneur__carte__note">
  <img src="<?php echo get_template_directory_uri(); ?>/images/stars.png" alt="Note Client">Note client :
  <?php the_field('note_client'); ?>
</p>
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
</article>
