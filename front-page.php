<?php

/**
 * front-page.php - Le modèle de la page d'accueil de wordpress
 */
?>
<?php get_header() ?>

<?php get_template_part('template-parts/hero'); ?>

<?php get_template_part('template-parts/inscription'); ?>


<main class="principal">
  <section class="global nouveau">
    <header>
      <h2>Nos destinations favorites</h2>
    </header>
    <?php get_template_part('template-parts/favorite'); ?>
  </section>

  <!-- ============================================================== -->

  <section class="global filtre">
    <?php
    echo do_shortcode('[extraire_categories]');?>
    <div class="filtre__resultat"></div>
  </section>

<!-- ================================================================= -->
</main>
<?php get_footer() ?>