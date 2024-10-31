<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
    <section class="global">
        <code>404.php</code>
        <div class="principal__conteneur principal__erreur404">
            <h2 class="page-title"><?php esc_html_e('Oops! Cette page ne peut pas être trouvée'); ?></h2>
            <div class="page-content">
                <p><?php esc_html_e('Il semble que rien n’ait été trouvé à cet endroit. Peut-être essayer une recherche parmi les cours ci-dessous ?'); ?></p>
                <?php
                wp_nav_menu(array(
                    "menu" => "erreur404",
                    "container" => "nav"
                ));
                ?>
            </div>
    </section>
</main>
<?php get_footer() ?>