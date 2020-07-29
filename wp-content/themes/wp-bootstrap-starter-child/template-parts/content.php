<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<header class="entry-header" style="background-image:url('<?php the_post_thumbnail_url() ?>'); background-size: cover; height: 60vh;">
			<div class="overlay d-flex align-items-end">
				<div class="col-md-5 title px-5">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="text-white souligneur-red mb-2">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
					<?php
					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta text-white">
						<?php wp_bootstrap_starter_posted_on(); ?>
						<?php the_excerpt(); ?>
					</div>
					<!-- .entry-meta -->
					<?php
					endif; ?>
				</div>
			</div>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<a href="<?php echo get_page_link($page = 11);?>" class="inline-link icn-bef back" title="Retourner à la page des actualités">Retour à la page des actualités</a>
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md pt-5">
						<?php
							the_content();
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
								'after'  => '</div>',
							) );
							the_post_navigation();
						?>
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
