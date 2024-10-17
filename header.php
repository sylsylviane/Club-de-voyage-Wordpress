<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>31w</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="entete">
            <section class="global">
                <h1><?php bloginfo("name") ?></h1> <!--RECUPERE LE TITRE DU COURS DANS LE TABLEAU DE BORD -->
                <h2><?php bloginfo("description") ?></h2>
                <!-- <nav>
                    <ul>
                        <li>Accueil</li>
                        <li>À propos</li>
                        <li>Contact</li>
                    </ul>
                </nav> -->
                <?php wp_nav_menu(array(
                                "menu" => "principal",
                                "container"=>"nav")
                ); ?>
                <form action="" class="recherche">
                    <input type="search">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" alt="" width="20" height="20">
                </form>
            </section>
        </header>