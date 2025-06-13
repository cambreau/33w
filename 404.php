<?php 
 /** Modele index.php
  * Modele par default si aucun autre modele n'est trouve.
  */
?>
   <!-- Recupere le header -->
   <?php get_header(); ?>
   <main>
       <h1 class="erreur-404__titre">Erreur 404</h1>
       <p class="erreur-404__message">La page que vous cherchez n'existe pas.</p>
   </main>
   <!-- Recupere le footer -->
   <?php get_footer(); ?> 
