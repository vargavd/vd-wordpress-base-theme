<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VD_base_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
		    <div class="site-branding">
    			<?php the_custom_logo(); ?>
    		</div>

            <button class="header-menu-button" id="hamburger-menu">
                <i class="fas fa-bars"></i>
            </button>
    
            <div id="menus">
                <button class="header-menu-button" id="mobile-menu-close">
                    <i class="fas fa-times"></i>
                </button>

                <div id="topbar">
                    <div id="topbar-search" class="topbar-item">
                        <div class="topbar-search__icon">
                            <button id="topbar-search-button"><i class="fas fa-search"></i></button>
                        </div>
                        <?php get_search_form(); ?>
                    </div>
        
                    <div class="topbar-item">
                        <a href="#">
                            <i class="fas fa-file-alt only-on-mobile"></i>
                            <span>News</span>
                        </a>
                    </div>
        
                    <div class="topbar-phone topbar-item">
                        <a href="tel:000">
                            <i class="fas fa-phone"></i>
                            <span>Call us</span>
                        </a>
                    </div>
        
                    <div class="topbar-login topbar-item">
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <span>Sign in</span>
                        </a>
                    </div>
                </div>
        
        		<nav class="main-navigation">
        			<?php
        			wp_nav_menu(
        				array(
        					'theme_location' => 'menu-1',
        					'menu_id'        => 'primary-menu',
        				)
        			);
        			?>
                    <button class="big-cta-menu-item">
                        Call to action
                    </button>
        		</nav>
            </div>
		</div>
	</header><!-- #masthead -->
