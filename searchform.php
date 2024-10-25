<?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
    <input class="recherche__input" type="search" class="search-field" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button class="recherche__bouton" type="submit" class="search-submit">
    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
  </button>
</form>