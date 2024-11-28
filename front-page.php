<?php

/**
 * front-page.php - Le modèle de la page d'accueil de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <!-- ============== en faire un template part ??? ========================= -->
  <?php
  $hero_title = get_theme_mod('hero_title', 'Default Title');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Default Subtitle');
  $hero_background = get_theme_mod('hero_background',  '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Default CTA');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#');
  ?>
  <!-- a modifier -->
  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <header>
        <h1><?php echo esc_html($hero_title); ?></h1>
      </header>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_text); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>
  <!-- ============================================================================ -->


  <section class="global nouveau">
    <header>
      <h2>Nos favoris</h2>
    </header>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <div class="carte">
            <?php the_post_thumbnail('medium', ['class' => 'carte-img-top', 'alt' => '']) ?>
            <img src="" alt="" class="carte-image-top">
            <div class="carte-body">
              <h5 class="carte-titre"><?php the_title() ?></h5>
              <!-- <h6 class="carte-sous-titre"><?php the_category() ?></h6> -->
              <p class="carte-texte"><?php the_excerpt() ?></p>
              <a href="<?php the_permalink() ?>" class="carte-lien">Voir plus</a>
            </div>
          </div>
        <?php endwhile; ?>
        <!-- ============================================================================ -->
        

    </div>
  <?php endif ?>
  </section>

  <section>
    <?php echo do_shortcode('[carrousel]'); ?>
  </section>
  <!-- à faire pour tp2 -->
  <section id="inscription" class="global inscription">
    <form action="">
      <label for="">Nom
        <input type="text" name="nom">
      </label>
            <label for="">Prénom
        <input type="text" name="prenom">
      </label>
            <label for="">Courriel
        <input type="email" name="courriel">
      </label>
            <label for="">Numéro civique et rue
        <input type="text" name="adresse">
      </label>
            <label for="">Ville
        <input type="text" name="ville">
      </label>
            <label for="">Province
        <input type="text" name="province">
      </label>
            <label for="">Pays
        <input type="text" name="pays">
      </label>
            <label for="">Téléphone
        <input type="text" name="telephone">
      </label>
    </form>
  </section>
  <!-- ============== en faire un template part ??? ========================= -->

  <!-- <section id="inscription" class="global filtre"></section> -->
  <!-- un appel à l'extension rest api filtre -->
  <!-- ============================================================================ -->

</main>
<?php get_footer() ?>