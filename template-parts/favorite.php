<!-- =================TEMPLATE PARTS - AFFICHER FAVORI ET CARROUSEL============== -->
<div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php if (in_category('galerie')) : the_content() ?>
          <?php elseif (in_category('favorite')) :  ?>       
            <article class="principal__article"><a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium', ['class' => 'carte-img-top', 'alt' => 'Image de voyage']) ?>
              <header>
                <h5><?php the_title() ?></h5>
              </header>
              <p><?php the_excerpt() ?></p>
              <a href="<?php the_permalink() ?>">Voir plus</a>
            </a>
          </article>
          <?php endif ?>
        <?php endwhile; ?>
    </div>
  <?php endif ?>