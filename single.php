<?php

/**
 * single.php - Pour afficher un seul article ou résultat
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h1><?php the_title() ?></h1>
            <?php the_post_thumbnail() ?>
             <!-- <p>
              <img src="<?php the_post_thumbnail_url() ?>" alt="" style='width:100%; height:auto;'>
             </p> -->
            <?php the_content() ?>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>