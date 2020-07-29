<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
  <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer black-container" role="contentinfo">
		<div class="container-fluid logo-bg" id="contact">
			<div class="container pt-5">
				<div class="row justify-content-around">
					<div class="col-md-3 pb-5">
						<div class="d-flex">
							<h2 class="text-white souligneur-red mb-2">Contact</h2>
						</div>
						<p class="text-justify text-white font-weight-lighter" style="font-size:1.15rem;">
							<?php the_field("contact", 9)?><br><br>
							<a href="mailto:contact@bonnefis.fr" class="inline-link icn-bef mail" title="Contact par email">contact@bonnefis.fr</a><br><br>
							<a href="tel:0565690025" class="inline-link icn-bef tel" title="Contact par téléphone">0565690025</a><br><br>
							<a href="https://www.facebook.com/GarageBonnefis" class="inline-link mr-3" title="Notre page Facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/bonnefisautomobile/" class="inline-link" title="Notre page Instagram"><i class="fab fa-instagram"></i></a>
						</p>
					</div>
					<div class="col-md-7 pb-5">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.4421110749244694%2C44.27638129264758%2C2.4468961358070374%2C44.278783675892335&amp;layer=mapnik&amp;marker=44.27758345673287%2C2.444503605365753" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=44.27758&amp;mlon=2.44450#map=19/44.27758/2.44450&amp;layers=N">Afficher une carte plus grande</a></small>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<section class="container-fluid grey-container-2" rolte="contentinfo">
		<div class="container pt-1">
			<div class="row">
				<div class="site-info col-md pb-1 text-white">
						&copy; <?php echo date('Y'); ?> <?php echo '<a class="inline-link" href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?><span class="sep"> | </span><a class="credits inline-link" href="https://www.galago.fr/" target="_blank" title="Agence de communication créative">Agence Galago : communication créative</a>
				</div><!-- close .site-info -->
				<div class="col-md text-right pb-1">
					<p class="m-0 text-white">
						<a href="<?php echo get_page_link($page = 107);?>" class="inline-link" title="Consulter nos mentions légales">Mentions légales</a>
					</p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
