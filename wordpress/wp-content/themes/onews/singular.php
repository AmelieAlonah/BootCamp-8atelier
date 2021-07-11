
<?php

// On appelle le header de Wordpress
get_header();

?>

<h2 class="right__title">
  <?php the_title() ?>
</h2>
<div class="posts">  
  <article class="post post--solo">
    <?php the_content() ?>

    <a href="<?= get_home_url() ?>">
      Retour à l'accueil
    </a>
  </article>
</div>

<?php get_footer();