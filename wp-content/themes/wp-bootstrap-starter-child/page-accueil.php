<?php
/**
 * Template Name: Page d'accueil
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div id="carouselExampleIndicators" class="carousel slide d-flex align-items-center justify-content-center" data-ride="carousel">
              <div class="page-title position-absolute text-center">
                <h1 class="text-uppercase font-weight-bold text-white txt-shadow">
                    <?php the_field("titre-1")?>
                </h1>
                <h2 class="subtitle text-uppercase text-white txt-shadow">
                    <?php the_field("sous_titre_h2")?>
                </h2>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
              <div class="overlay-1 w-100"></div>
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="<?php the_field("image_1")?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="<?php the_field("image_2")?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="<?php the_field("image_3")?>" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <div class="container-fluid py-3">
              <div class="container pt-5">
                <div class="row justify-content-center">
                  <h2 class="souligneur-red mb-2">
                    Nos services
                  </h2>
                </div>
                <div class="row justify-content-around pt-5">
                  <div class="col-md-3 px-0 pb-5">
                    <img src="<?php the_field("vente_image")?>" class="w-100 pb-4" alt="...">
                    <h3 class="mb-0">
                      Vente
                    </h3>
                    <img src="http://bonnefis.galago.fr/wp-content/uploads/2020/07/Groupe-133@2x.png" class="sepa mb-3" alt="Divider">
                    <div class="text-justify">
                      <?php the_field("vente")?>
                    </div>
                    <a class="btn btn-premiere font-weight-bolder mt-4" href="#" role="button">Voir nos annonces</a>
                  </div>
                  <div class="col-md-3 px-0 pb-5">
                    <img src="<?php the_field("atelier_image")?>" class="w-100 pb-4" alt="...">
                    <h3 class="mb-0">
                      Atelier mécanique
                    </h3>
                    <img src="http://bonnefis.galago.fr/wp-content/uploads/2020/07/Groupe-133@2x.png" class="sepa mb-3" alt="Divider">
                    <div class="text-justify">
                      <?php the_field("atelier_mecanique")?>
                    </div>
                    <a class="btn btn-seconde font-weight-bolder mt-4" href="https://www.ad.fr/garage/garage-ad-expert-garage-bonnefis" role="button">Prendre RDV</a>
                  </div>
                  <div class="col-md-3 px-0 pb-5">
                    <img src="<?php the_field("carrosserie_image")?>" class="w-100 pb-4" alt="...">
                    <h3 class="mb-0">
                      Carroserie
                    </h3>
                    <img src="http://bonnefis.galago.fr/wp-content/uploads/2020/07/Groupe-133@2x.png" class="sepa mb-3" alt="Divider">
                    <div class="text-justify">
                      <?php the_field("carrosserie")?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="container-fluid black-container py-5">
              <div class="container">
                <div class="row pt-5 justify-content-around">
                  <div class="col-md-6 pb-5">
                    <img src="<?php the_field("voitures_image")?>" class="w-100" alt="...">
                  </div>
                  <div class="col-md-5 pb-5">
                    <div class="d-flex">
                      <h2 class="text-white souligneur-red mb-2">Nos Voitures</h2>
                    </div>
                    <div class="text-justify text-white font-weight-lighter">
                      <?php the_field("voitures")?>
                    </div>
                    <a class="btn btn-premiere font-weight-bolder mt-4" href="#" role="button">Voir nos annonces</a>
                  </div>
                </div>
                </div>
            </div>
            <div class="container-fluid red-container">
                <div class="container">
                <div class="row pt-5 justify-content-around">
                  <div class="col-md-7 pb-5 d-flex">
                      <h3 class="text-white souligneur-black">Vous n'avez pas trouvé le modèle qui vous correspond ?</h3>
                  </div>
                  <div class="col-md-4 pb-5">
                    <a href="https://www.ad.fr/garage/garage-ad-expert-garage-bonnefis" class="btn-link text-uppercase font-weight-bold text-white" role="button">Envoyez nous vos envies</a>
                    <p class="text-justify text-white font-italic mt-2">
                      Notre équipe s'engage à vous proposer un modèle dans les 72h.
                    </p>
                  </div>
                </div>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container">
                <div class="row pt-5 justify-content-around">
                  <div class="col-md-5 pb-5">
                    <div class="d-flex">
                      <h2 class="souligneur-red mb-2">
                        Qui sommes nous ?
                      </h2>
                    </div>
                    <div class="text-justify font-weight-lighter">
                      <?php the_field("qui_sommes_nous")?>
                    </div>
                  </div>
                  <div class="col-md-6 pb-5">
                    <img src="<?php the_field("qui_sommes_nous_image")?>" class="w-100" alt="...">
                  </div>
                </div>
                </div>
            </div>
            <div class="container-fluid grey-container">
              <div class="container pt-5">
                <div class="row justify-content-center pb-3">
                  <h2 class="souligneur-red mb-2">Nos actualités</h2>
                </div>
                <div class="row justify-content-around pb-3">
                    <?php
                    // affiche les 3 derniers articles
                    $posts_ex_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
                    <?php if ( $posts_ex_query->have_posts() ) : ?>
                        <!-- the loop -->
                        <?php while ( $posts_ex_query->have_posts() ) : $posts_ex_query->the_post(); ?>
                            <div class="col-md-3 px-0 pb-5">
                              <?php the_post_thumbnail(); ?>
                              <h3 class="pt-4 mb-0"><?php the_title(); ?></h3>
                              <img src="http://bonnefis.galago.fr/wp-content/uploads/2020/07/Groupe-133@2x.png" class="mb-3 sepa" alt="Divider">
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
                  <div class="row justify-content-around pb-5">
                      <a class="btn btn-seconde font-weight-bolder" href="<?php echo get_page_link($page = 11);?>" role="button">Voir toutes nos actus</a>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="container pt-5">
                  <div class="row">
                     <div class="col-md pb-5">
                       <div class="d-flex">
                         <h2 class="souligneur-black">
                           Ils parlent de nous
                         </h2>
                       </div>
                       <div class="avis">
                         <?php echo do_shortcode('[grw place_photo="https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png" place_name="GARAGE BONNEFIS" place_id="ChIJ20mwQWqHrRIRShnsayoQl2A" pagination="5" text_size="120" max_width="100%" refresh_reviews=true lazy_load_img=true reduce_avatars_size=true open_link=true nofollow_link=true]'); ?>
                       </div>
                    </div>
                    <div class="col-md-4 pb-5 d-flex flex-column">
                      <div class="d-flex">
                      <h2 class="souligneur-black">
                        Suivez nous
                      </h2>
                      </div>
                      <iframe name="f113ec92d7ed2c8" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" style="border: medium none; visibility: visible; width: 100%; height: 500px;" src="https://www.facebook.com/v2.12/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1b6c98a5b1c634%26domain%3Dgaragebonnefis.com%26origin%3Dhttps%253A%252F%252Fgaragebonnefis.com%252Ff80f0505611f2c%26relation%3Dparent.parent&amp;container_width=323&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FGarage-Bonnefis-258740490818020%2F&amp;locale=fr_FR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" class="mt-5" width="100%" height="1000px" frameborder="0"></iframe>
                   </div>
                  </div>
                </div>
              </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
