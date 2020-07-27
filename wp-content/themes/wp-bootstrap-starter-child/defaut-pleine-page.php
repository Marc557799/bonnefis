<?php
/**
* Template Name: Defaut Pleine Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">
				<div class="row justify-content-around pt-5">
						<h1 class="font-weight-lighter souligneur-red"><?php the_title();?></h1>
				</div>
				<div class="row justify-content-around pt-5">
					<div class="col-md-7">
						<?php /* Start the Loop */
							while(have_posts()) : the_post();
							the_content();
							endwhile; ?>
					</div>
				</div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_footer();
