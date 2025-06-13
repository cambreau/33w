<?php
/**
 * Gabarit searchform.php 
 * Permet de générer le formulaire de recherche
 */

?>

<form class="recherche" methode="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input
            class="recherche__input"
            type="search"
            value="<?php echo get_search_query(); ?>"
            name="s"
            id="recherche"
            placeholder="Rechercher..."
          />
          <button class="recherche__bouton">
            <img
              src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
              width="16"
              height="16"
            />
          </button>
</form>