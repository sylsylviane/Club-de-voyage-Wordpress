<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2>Liste de cours - category-cours.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
        <?php 
            $chaine = get_the_title();
            $sigle = substr($chaine,0,7);
            $position_parenthesese = strpos($chaine, '(');
            $titre = substr($chaine,7,$position_parenthesese-7);
            $duree = substr($chaine,$position_parenthesese);
        ?>
          <article class="principal__article">
            <h5><?php echo $sigle ?></h5>
            <h5><?php echo $titre ?></h5>
            <!-- On trim le résume the_excerpt à 50 mots -->
            <p><?php echo wp_trim_words(get_the_excerpt(), 50, "suite..."); ?></p> <!-- the_content peut contenir des images, the_excert contient du texte -->
            <h5>Durée: <?php echo $duree ?></h5>
            <h6>Commentaire:<?php the_field('commentaire'); ?></h6>
          </article>
        <?php endwhile; ?>
    </div>

  <?php endif ?>
  </section>
</main>
<?php get_footer() ?> 