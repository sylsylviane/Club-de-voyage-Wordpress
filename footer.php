        <footer class="pied">
            <section class="global pied__global">
                <header>
                    <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                </header>

                <div class="pied__conteneur">
                    <div>
                        <h2>Introduction à un gestionnaire de contenu</h2>
                        <h3>Création d'une page d'accueil</h3>
                        <p>Travail réalisé par Sylviane Paré</p>
                        <a href="https://github.com/sylsylviane/31w"><i class="ri-github-fill"></i> Lien github</a>
                    </div>
                    <div class="pied__texte-image">
                        <p>Cet exercice nous permettra de continuer à améliorer notre thème en ajoutant les modèles front-page.php, ainsi que search.php. Plusieurs nouvelles règles de style seront ajoutées en utilisant les variables CSS/Sass et les Mixin</p>
                        <!-- <img src="http://localhost/31w/wp-content/uploads/2024/10/college-maisonneuve.jpg" alt="Collège Maisonneuve"> -->
                        <img src="https://gftnth00.mywhc.ca/31w09/wp-content/uploads/2024/10/college-maisonneuve.jpg" alt="Collège Maisonneuve">
                        <!-- <img src="/wp-content/uploads/2024/10/college-maisonneuve.jpg" alt=""> -->
                    </div>
                    <div class="pied__nav">
                        <?php wp_nav_menu(
                            array(
                                "menu" => "principal",
                                "container" => "nav"
                            )
                        );
                        get_search_form();
                        ?>
                    </div>
                </div>
            </section>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>