<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<!-- Permet d'obtenir toutes les infos sur la catégorie active, y compris la description -->
  <?php $category = get_queried_object();
  if (isset($category->description)){
    echo esc_html($category->description);
  } ?>
  <!-- ========================================================= -->
   
<main class="principal">
  <section class="global">
    <h2><?php single_cat_title() ?></h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h5><?php the_title() ?></h5>
            <p><?php the_content() ?></p>
          </article>
        <?php endwhile; ?>
    </div>

  <?php endif ?>
  </section>
</main>
<?php get_footer() ?> 