<?php
/** index.php - Le modèle par défaut de wordpress*/
?>
<?php get_header(); ?>

        <main class="principal">
            <section class="global">
                <h2>Liste de cours</h2>
                <div class="principal__conteneur">
                <?php if (have_posts()): ?> <!-- EXTRAIRE LES POSTS DE LA BASE DE DONNÉES (TOUS LES ARTICLES) - VERIFIER SI AU MOINS UN ARTICLE EST EXTRAIT-->
                    <?php while (have_posts()): the_post(); ?> <!--TANT QU'IL Y A DES ARTICLES-->
                    <?php
                        $chaine = get_the_title(); //ON EXTRAIT LE TITRE
                        $sigle = substr($chaine, 0, 7);
                        $titre = substr($chaine, 8, strrpos($chaine, "(")-8);
                    ?>
                    <article class="principal__article">
                        <h5><?php echo $sigle; ?></h5> <!--retourne le titre -->
                        <h6><?php echo $titre; ?></h6>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p> <!--the_excerpt fait un echo, get_the_experpt retourne une chaine -->
                    </article>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
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