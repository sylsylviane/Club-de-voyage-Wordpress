        <footer class="pied">
            <section class="global pied__global">

                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>

                <div class="pied__conteneur">
                    <div>
                        <?php get_template_part('template-parts/pied-de-page-auteur'); ?>
                        <?php get_template_part('template-parts/pied-de-page-infos'); ?>
                        <?php get_template_part('template-parts/pied-de-page-icones'); ?>
                        <a href="https://github.com/sylsylviane/31w"><i class="ri-github-fill"></i> Lien github</a>
                        <?php get_search_form(); ?>
                    </div>


                    <div class="pied__nav">

                        <?php
                        
                        wp_nav_menu(array(
                            'menu' => 'liens',
                            'theme_location' => 'liens_menu',
                            'menu_id'        => 'liens-menu',
                            'menu_class'     => 'liens-menu-class',
                        ));
                        ?>



                    </div>
                </div>
            </section>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>