<div class="conteneur global">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <?php
            if (in_category('galerie')) {
                get_template_part("gabarit/galerie");
            } else {
                get_template_part("gabarit/carte");
            ?>
    <?php }
        }
    } ?>
</div>