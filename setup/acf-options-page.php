<?php

/* ADD ACF OPTIONS PAGE */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
        'page_title' => 'General Settings' // TODO: Change this to the name of the site
    ));
}