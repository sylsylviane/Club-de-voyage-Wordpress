<?php
/** index.php - Le modèle par défaut de wordpress*/
?>

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
                <h1>31w</h1>
                <nav>
                    <ul>
                        <li>Accueil</li>
                        <li>À propos</li>
                        <li>Contact</li>
                    </ul>
                </nav>
                <form action="" class="recherche">
                    <input type="search">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" alt="" width="20" height="20">
                </form>
            </section>
        </header>
        <main class="principal">
            <section class="global">
                <h2>Accueil</h2>
                <?php if (have_posts()): ?> <!-- VERIFIER SI AU MOINS UN ARTICLE EST EXTRAIT ???-->
                    <?php while (have_posts()): the_post(); ?> 
                    <?php
                        $chaine = get_the_title();
                        $sigle = substr($chaine, 0, 7);
                        $titre = substr($chaine, 8, 40);
                    ?>
                    <article class="principal__article">
                        <h3><?php echo $sigle; ?></h3> <!--retourne le titre -->
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p> <!--the_excerpt fait un echo, get_the_experpt retourne une chaine -->
                    </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <p>Bienvenue sur 31w Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto autem voluptatem, ipsum velit dolores aliquam ex explicabo atque at vero qui illum possimus obcaecati odit cupiditate aliquid iure repellat dolore!</p>
            </section>
        </main>    
        <footer class="pied">
            <section class="global">
                <div>1</div>
                <div>2</div>
                <div>3</div>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>