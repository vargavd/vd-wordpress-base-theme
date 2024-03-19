<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VD_base_Theme
 */

get_header();
?>

	<div class="vd-base-page">
		<div class="container">
		  <?php
        while ( have_posts() ) {
          the_post();
  
          the_content();
        }
      ?>
		</div>
	</div>

<?php
get_footer();
