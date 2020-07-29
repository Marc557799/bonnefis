<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
      <div class="collapse" id="collapseExample">
        <div class="collapseClose" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
        </div>
        <a class="mb-m-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-times" aria-hidden="true"></i></a>
        <?php
        /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
        if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
            wp_nav_menu( array(
              'depth' => 6,
              'sort_column' => 'menu_order',
              'container' => 'ul',
              'menu_id' => 'main-nav',
              'menu_class' => 'nav mobile-menu',
              'theme_location' => 'mobile-menu'
            ) );
            } else {
               echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
        }
        ?>
        <div class="logo-zone text-center d-flex align-items-center flex-column position-relative">
          <img class="" src="https://bonnefisautomobile.com/wp-content/uploads/2020/07/logo-bonnefis-generique-couleur-fond-blanc.jpg" alt="Logo grand">
          <a title="contact@bonnefis.fr" href="mailto:contact@bonnefis.fr" class="nav-link-2-mail">contact@bonnefis.fr</a>
          <a title="0565690025" href="tel:0565690025" class="nav-link-2-tel pt-4">0565690025</a>
        </div>
      </div>
	<header id="masthead" class="site-header navbar-static-top bg-white d-flex" role="banner">
    <a class="mb-m-link align-items-center d-flex ml-3 burger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="https://bonnefisautomobile.com/wp-content/uploads/2020/07/menu-icon@2x.png" class="w-50"></a>
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand m-0">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>" class="text-center">
                            <img class="w-50" src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>
                    <a href="mailto:contact@bonnefis.fr" class="mb-m-link send align-items-center d-flex"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
        </div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row d-block">
                <?php endif; ?>
