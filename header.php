<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Prototype de la page d'accueil" />
    <meta name="author" content="Camille Breau" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
      <?php wp_head(); ?>
</head>
  <body>
    <header class="entete">
      <picture class="entete__logo-container">
          <?php echo get_custom_logo(); ?>
      </picture>
      <div class="entete__nav-recherche">
        <nav class="entete__nav">
          <input
            type="checkbox"
            id="menu-toggle"
            class="entete_toggle"
            hidden
          />
          <label for="menu-toggle" class="entete__toggle-icon">☰</label>
             <?php wp_nav_menu( array(
          'menu' => 'principal',
            'container' => false,
            'menu_class' => 'entete__menu'
        ) ); ?>
        </nav>
        <?php get_search_form(); ?>
      </div>
    </header>