<?php
    $footer_couleur = "#66bcbc";
    vague("#fbf8f4", $footer_couleur); ?>
    <footer class="piedpage" style="background-color: <?= $footer_couleur ?> ;">
        <div class="piedpage__ligne-1">
            <div class="piedpage__lien">
              <h3>Liens sur les voyages</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav"
                )) ?>
            </div>
            <section class="piedpage__adresse">
            <h3>Coordonnées et recherche</h3>
                <p class="piedpage__coordonnees">info@voyageavecnous.com</p>
                <p class="piedpage__coordonnees">20 rue la prairie, Brossard</p>
                <p class="piedpage__coordonnees">1-800-555-1234</p>
                <?php get_search_form() ?>
            </section>
            <p class="piedpage__description">
            Bienvenue sur Évasion Totale, votre portail vers des expériences inoubliables aux quatre coins du globe ! Que vous soyez un passionné de sport, un adepte de la relaxation ou un aventurier dans l’âme, nous avons sélectionné pour vous les meilleures destinations et activités pour répondre à toutes vos envies de voyage.
            </p>
        </div>
        <div class="piedpage__ligne-2">
            <?php icone_sociaux('#e9fcf5') ?>
        </div>
  </footer>
</body>
<?php wp_footer(); ?>
</html>