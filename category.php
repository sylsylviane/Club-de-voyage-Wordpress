<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>


<!-- ========================================================= -->

<main class="principal">
  <!-- Permet d'obtenir toutes les infos sur la catégorie active, y compris la description -->
  <section class="principal__description">
    <p> <?php $category = get_queried_object();
        if (isset($category->description)) {
          echo esc_html($category->description);
        } ?></p>
  </section>
  <section class="global">
    <h2><?php single_cat_title() ?></h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <?php the_post_thumbnail('medium', ['class' => 'carte-img-top', 'alt' => 'Image de voyage']) ?>
            <h5><?php the_title() ?></h5>
            <p><?php the_content() ?></p>
            <a href="<?php the_permalink() ?>" class="bouton">Voir plus</a>
          </article>
        <?php endwhile; ?>
    </div>

  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>