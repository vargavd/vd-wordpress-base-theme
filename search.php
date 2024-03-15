<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package VD_base_Theme
 */

get_header();
?>

	<div class="vd-base-theme">

		<?php if ( have_posts() ) : ?>

            <!-- TODO: HERO TEMPLATE NEEDED -->
			<header id="main-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'vd_base' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
                <div class="search-result-item">
                    <?php
                        the_title( '<h1 class="entry-title">', '</h1>' );

                        the_excerpt();
                    ?>
                </div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

	</div>

<?php
// get_sidebar();
get_footer();
