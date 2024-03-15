<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VD_base_Theme
 */

?>

<footer id="site-footer" class="top-negative-section-margin">
    <div class="container">
        <div id="footer-column-1">
            <img src="<?=null//get_field('footer_logo', 'option')['url']?>" alt="Footer Logo" id="footer-logo">
        </div>

        <div id="footer-column-2">
            <div id="social-icons">
                <a href="<?=null//get_field('facebook_link', 'option')?>" alt="Facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="<?=null//get_field('twitter_link', 'option')?>" alt="Twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="<?=null//get_field('linkedin_link', 'option')?>" alt="LinkedIn" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="<?=null//get_field('youtube_link', 'option')?>" alt="YouTube" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer',
                        'menu_id'        => 'secondary-menu',
                    )
                );
            ?>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
