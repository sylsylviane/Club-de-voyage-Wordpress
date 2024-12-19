        <footer class="pied">
            <section class="global pied__global">

                <div class="pied__conteneur">
                    <div>
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } else {
                            echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                        }
                        ?>
                    </div>


                    <div class="pied__nav">
                        <header>
                            <h5>Liens externes</h5>
                        </header>
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'liens',
                            'theme_location' => 'liens_menu',
                            'menu_id'        => 'liens-menu',
                            'menu_class'     => 'liens-menu-class',
                        ));
                        get_search_form();
                        ?>
                    </div>

                    <div>
                        <header>
                            <h5>Nous Contacter</h5>
                        </header>
                        <?php get_template_part('template-parts/pied-de-page-infos'); ?>
                    </div>

                    <div>
                        <header>
                            <h5>Liens utiles</h5>
                        </header>
                        <p><?php get_template_part('template-parts/pied-de-page-icones'); ?></p>
                        <a href="https://github.com/sylsylviane/31w"><i class="ri-github-fill"></i> Lien github - Thème 31w</a>
                        <a href="https://github.com/sylsylviane/filtre-pays"><i class="ri-github-fill"></i>Lien github - Plugin filtre-pays</a>
                    </div>


                </div>
                <div class="pied__auteur">
                    <p>Politiques et confidentialité</p>
                    <p>Termes et conditions</p>
                    <?php get_template_part('template-parts/pied-de-page-auteur'); ?>
                </div>
            </section>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>