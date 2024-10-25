<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <header>
    <h2>Résultat de la recherche</h2>
    </header>
    <div class="principal__recherche">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>

          <article class="principal__article"><a href="<?php the_permalink(); ?>">
            <!-- the_permalink permet de créer un lien  -->
            <h5><?php the_title() ?></h5>
            <p><?php echo wp_trim_words(get_the_excerpt(), 50, null); ?></p></a>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>