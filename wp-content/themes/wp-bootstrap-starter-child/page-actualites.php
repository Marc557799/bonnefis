<?php
/**
 * Template Name: Page Actualités
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="container-fluid" style="background-image:url('<?php the_field('image_de_la_banniere')?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
            <div class="row justify-content-center py-5 overlay">
                <div class="page-title text-center my-5">
                  <h1 class="text-uppercase font-weight-bold text-white txt-shadow">
                      <?php the_title()?>
                  </h1>
                  <h2 class="text-uppercase font-weight-bold text-white txt-shadow">
                      Votre spécialiste auto à Rodez
                  </h2>
                </div>
            </div>
          </div>
          <div class="container-fluid">
              <div class="container">
                <div class="row">
                  <a href="<?php echo get_home_url()?>" class="inline-link icn-bef back" title="Retourner à la page d'accueil">Retour à l'accueil</a>
                </div>
              </div>
              <div class="container pt-5">
                <div class="row justify-content-between pb-3">
                    <?php
                    // affiche les 3 derniers articles
                    $posts_ex_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                    <?php if ( $posts_ex_query->have_posts() ) : ?>
                        <!-- the loop -->
                        <?php while ( $posts_ex_query->have_posts() ) : $posts_ex_query->the_post(); ?>
                            <div class="col-md-3 px-0 pb-5">
                              <?php the_post_thumbnail(); ?>
                              <h3><?php the_title(); ?></h3>
                              <p class="text-justify">
                                <?php the_excerpt(); ?>
                              </p>
                              <a href="<?php the_permalink(); ?>" class="btn-link text-uppercase font-weight-bold" style="color: var(--seconde);">Lire cet article</a>
                            </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
