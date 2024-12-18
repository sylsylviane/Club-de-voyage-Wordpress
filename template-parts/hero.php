<!-- ============== TEMPLATE PARTS - SECTION HERO ========================= -->
<?php
//Un champ pour le titre principal.
$hero_title = get_theme_mod('hero_title', 'Default Title');
//Un champ pour le sous-titre.
$hero_subtitle = get_theme_mod('hero_subtitle', 'Default Subtitle');
//Un téléchargeur d’image pour l’arrière-plan.
$hero_background = get_theme_mod('hero_background',  '');
//Un champ pour le texte du bouton CTA.
$hero_cta_text = get_theme_mod('hero_cta_text', 'Default CTA');
//Un champ pour l’URL du bouton CTA.
$hero_cta_link = get_theme_mod('hero_cta_link', '#');
$hero_adresse = get_theme_mod('hero_adresse', '');
$hero_courriel = get_theme_mod('hero_courriel', '');
$hero_telephone = get_theme_mod('hero_telephone', '');

$reseaux_sociaux = array('facebook', 'instagram');
$icones_sociaux = [];
foreach ($reseaux_sociaux as $reseau) {
  $icones_sociaux[$reseau] = ['url' => get_theme_mod("social_{$reseau}_url", ''), 'icon' => get_theme_mod("social_{$reseau}_icon", '')];
}
?>

<section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
  <div class="hero__contenu">
    <header>
      <h1><?php echo esc_html($hero_title); ?></h1>
    </header>
    <p><?php echo esc_html($hero_subtitle); ?></p>
    <p><?php echo esc_html($hero_courriel); ?></p>
    <p><?php echo esc_html($hero_adresse); ?></p>
    <p><?php echo esc_html($hero_telephone); ?></p>


    <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
      <a href="<?php echo $hero_cta_link; ?>" class="hero__cta">
        <?php echo esc_html($hero_cta_text); ?>
      </a>
    <?php endif; ?>

    <div class="hero__social-icons">
      <?php foreach ($icones_sociaux as $reseau => $data) : ?>
        <?php if (!empty($data['url']) && !empty($data['icon'])) : ?>
          <a href="<?php echo esc_url($data['url']); ?>">
            <img src="<?php echo esc_url($data['icon']); ?>" alt="Icones réseaux sociaux"> </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- ============================================================================ -->