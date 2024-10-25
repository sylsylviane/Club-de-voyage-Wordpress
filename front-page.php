<?php

/**
 * front-page.php - Le modèle de la page d'accueil de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <header>
      <h2>Liste de cours</h2>
    </header>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php
          $chaine = get_the_title();
          $sigle = substr($chaine, 0, 7);
          $titre = substr($chaine, 8, strrpos($chaine, "(") - 8);
          $duree = '60h';
          ?>
          <article class="principal__article"><a href="<?php the_permalink(); ?>">
              <header>
                <h5><?php echo $sigle ?></h5>
              </header>
              <h6><?php echo $titre ?></h6>
              <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
              <code><?php echo $duree; ?></code>
            </a>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>