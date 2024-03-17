<?php


/* DISABLE SOME THEME FEATURES */
add_action('after_setup_theme', function () {
  remove_theme_support('widgets-block-editor');
  remove_theme_support('block-templates');
});


/* ONLY ALLOW SPECIFIC BLOCKS */
add_filter('allowed_block_types_all', function ($allowed_block_types, $block_editor_context) {
  // for specific post types
  if ($block_editor_context->post->post_type === 'post') {
    return array(
      'core/paragraph',
      'core/shortcode',
      'core/html',
      'core/freeform',
    );
  }

  // based the current user role
  if (current_user_can('editor')) {
    return array(
      'core/paragraph',
      'core/shortcode',
      'core/html',
      'core/freeform',
    );
  }


  return array(
    'core/paragraph',
    'core/shortcode',
    'core/html',
    'core/freeform',
  );
}, 10, 2);


/* DISABLE WORDPRESS CORE PATTERNS */
add_action('after_setup_theme', function () {
  remove_theme_support('core-block-patterns');
});


/* DISABLE REMOTE PATTERNS */
add_filter('should_load_remote_block_patterns', '__return_false');