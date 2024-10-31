<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global">
    <h2><?php
        $category = get_queried_object(); // Obtenir la catégorie actuelle
        if (isset($category->name)) {
          echo esc_html($category->name); // Afficher la description de manière sécurisée
        }
        ?></h2>
    <h2><?php echo category_description() ?></h2><code>category-cours.php</code>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php
          $chaine = get_the_title();
          $sigle = substr($chaine, 0, 7);
          $position_parenthesese = strpos($chaine, '(');
          $titre = substr($chaine, 7, $position_parenthesese - 7);
          $duree = substr($chaine, $position_parenthesese);
          ?>
          <article class="principal__article"><!--Ajouter permalink et un lien pour afficher les cours-->
            <h5><?php echo $sigle ?></h5>
            <h5><?php echo $titre ?></h5>
            <!-- On trim le résume the_excerpt à 50 mots -->
            <p><?php echo wp_trim_words(get_the_excerpt(), 10, " (suite...)"); ?></p> <!-- the_content peut contenir des images, the_excert contient du texte -->
            <h5>Durée: <?php echo $duree ?></h5>
            <p>Enseignant: <?php the_field('commentaire'); ?></p> <!--créer une liste déroulante-->
          </article>
        <?php endwhile; ?>
    </div>

  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>