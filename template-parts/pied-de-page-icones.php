<?php
$reseaux_sociaux = array('facebook', 'instagram');
$icones_sociaux = [];

foreach ($reseaux_sociaux as $reseau) {
     $icones_sociaux[$reseau] = ['url' => get_theme_mod("social_{$reseau}_url", ''), 'icon' => get_theme_mod("social_{$reseau}_icon", '')];
}
?>
<div class="hero__social-icons">
    <?php foreach ($icones_sociaux as $reseau => $data) : ?>
    <?php if (!empty($data['url']) && !empty($data['icon'])) : ?>
    <a href="<?php echo esc_url($data['url']); ?>">
    <img src="<?php echo esc_url($data['icon']); ?>" alt="Icones réseaux sociaux"> </a>
    <?php endif; ?>
    <?php endforeach; ?>
</div>