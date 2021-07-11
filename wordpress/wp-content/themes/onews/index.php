
<?php

    // On appelle le header de Wordpress
    get_header();

    // J'importe le fichier qui contient les données de mes articles
    include "inc/articles.data.php";
    // Ma variable $articles existe à partir d'ici

?>

    <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title">Latest News</h2>
    <div class="posts">

    <?php 
      if ( have_posts() ) : 
        while ( have_posts() ) : 
          the_post();

          $post_categories = get_the_category();
    ?>

      <article class="post">
          <?php foreach( $post_categories as $category ) : ?>
            <a href="<?= get_category_link( $category ) ?>" class="post__category post__category--color-news">
                <?= $category->name ?>
            </a>
          <?php endforeach; ?>

          <h3><?php the_title() ?></h3>
          <div class="post__meta">
              <img 
                class="post__author-icon" 
                src="<?= get_template_directory_uri() ?>/assets/images/icon-john.png" 
                alt=""
              >
              <strong class="post__author">
                  <?php the_author() ?>
              </strong>
              <time>
                <?php the_date() ?>
              </time>
          </div>
          <p><?php the_excerpt() ?></p>
          <a href="<?php the_permalink() ?>" class="post__link">
            Continue reading
          </a>
      </article>

    <?php
        endwhile; 
      else :
        _e('Sorry, no posts matched your criteria.');
      endif;
    ?>
    </div>

<?php get_footer();