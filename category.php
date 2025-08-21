<?php 
 /** Modele index.php
  * Modele par default si aucun autre modele n'est trouve.
  */
?>
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
      <div class="conteneur categorie">
          <h2><?php single_cat_title() ?></h2>
          <?= category_description(); ?>
                <?php
                $category = get_queried_object();
                $nom = $category->slug;
                // Afficher les cartes de la catégorie
                afficher_cartes_categorie($nom);
                ?>
        </div>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
