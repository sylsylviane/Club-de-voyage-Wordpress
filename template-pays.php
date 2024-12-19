<?php

/**
 * Template name: Pays
 *
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h5><?php the_title() ?></h5>
            <p><?php the_content() ?></p>
            <p>Nombre de personnes: <?php the_field('nombre_de_personnes'); ?></p>
            <p>Date de départ: <?php the_field('date_de_depart'); ?></p>
            <p>Date de retour: <?php the_field('date_de_retour'); ?></p>

          </article>
        <?php endwhile; ?>
    </div>

  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>