<?php

/**
 * single.php - Pour afficher un seul article ou résultat
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Résultat - single.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <!-- on aurait pas besoin d'utiliser une boucle while car un seul article sera toujours affiché -->
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>