<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left <?= is_page() ? 'left--contact' : '' ?>">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle">
            <strong class="left__subtitle-strong">Latest news</strong> from our students
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>

        <?php

          $menu = wp_nav_menu( [
            "theme_location" => "footer",     // Le nom de l'emplacement du menu déclaré dans functions.php
            "container"      => "nav",        // La balise qui contient la <ul> du menu (div par défaut)
            "menu_class"     => "left__nav",  // La classe a mettre sur la <ul>
            "echo"           => false         // On ne veut pas afficher le menu mais le récupérer dans la variable
          ] );

          // On peut vérifier le contenu du $menu (c'est du HTML)
          // var_dump( htmlentities( $menu ) );

          // On l'affiche
          echo $menu;

        ?>
      </header>
      <main class="right">