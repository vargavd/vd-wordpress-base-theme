<?php
/**
 * Template Name: Page Without Container
 *
 * @package VD_base_Theme
 */

get_header();
?>

	<div class="vd-base-page">
    <?php
      while ( have_posts() ) {
        the_post();

        the_content();
      }
    ?>
	</div>

<?php
get_footer();
