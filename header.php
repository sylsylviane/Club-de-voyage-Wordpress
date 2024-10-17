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
            <div class="global__entete">
                <h1><?php bloginfo("name") ?></h1> <!--RECUPERE LE TITRE DU COURS DANS LE TABLEAU DE BORD -->
                <form action="" class="recherche">
                    <div>
                        <label for="search"></label>
                        <input type="search" id="search" placeholder="Recherche">
                        <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" alt="" width="20" height="20">
                    </div>
                </form>
            </div>

            <h2><?php bloginfo("description") ?></h2>
            <?php wp_nav_menu(
                array(
                    "menu" => "principal",
                    "container" => "nav"
                )
            ); ?>
        </section>
    </header>