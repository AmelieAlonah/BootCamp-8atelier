<?php

  function register_styles()
  {
    wp_enqueue_style( "reset", get_template_directory_uri() . "/assets/css/reset.css" );
    wp_enqueue_style( "style", get_template_directory_uri() . "/assets/css/style.css" );
  }

  // On demande a Wordpress de charger nos styles lorsqu'il
  // chargera ses propres scripts
  add_action( "wp_enqueue_scripts", "register_styles" );



  function onews_setup()
  {
    // On dit a WP de s'occuper de la balise <title>
    add_theme_support( "title-tag" );

    // On va dire a WP de s'occuper de nos menus
    add_theme_support( "menus" ); // Facultatif car induit par register_nav_menus()

    register_nav_menus(
      [
        "footer" => "Menu de liens du footer"
      ]
    );
  }

  add_action( "after_setup_theme", "onews_setup" );


  /**
   * @param int $length Excerpt length.
   * @return int (Maybe) modified excerpt length.
   */
  function wpdocs_custom_excerpt_length( $length ) 
  {
    return ceil( $length / 2 ); // La moitié (arrondie) de la taille par défaut (55)
  }

  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );