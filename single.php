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
            <figure class="article__figure">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'bigImg', 'alt' => 'Image de voyage']);
              } ?>
              <figcaption><?php the_title() ?></figcaption>
            </figure>
            <?php the_content() ?>
            <p>Date de départ: <?php the_field('date_de_depart'); ?></p></a> <!--créer une liste déroulante-->

          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>

  <section>
    <header>
      <h2>S'inscrire</h2>
    </header>
    <?php get_template_part('template-parts/inscription'); ?>
  </section>

</main>
<?php get_footer() ?>