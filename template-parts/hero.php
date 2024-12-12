<!-- ============== TEMPLATE PARTS - SECTION HERO ========================= -->
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
        <a href="<?php echo $hero_cta_link; ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>
  <!-- ============================================================================ -->