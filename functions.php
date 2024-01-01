<?php 

if ( ! function_exists('paperless_theme_support')) :

    /**
     * sets up theme defaults and registers support for various wordpress features.
     * 
     * @since version 1.0
     * 
     * @return void
     * 
     */
    function paperless_theme_support() {
    // add support for block styles.
    add_theme_support('wp-block-styles');

    //enquene editor styles
    add_editor_style('style.css');

    }
    endif;
add_action('after_setup_theme','paperless_theme_support');

/**
 * enqueue styles
 */
if ( ! function_exists('paperless_styles')) :

function paperless_styles() {
    // regiqter stylesheet
    //wp_enqueue_style('paperless-styles', get_stylesheet_uri(), array(),wp_get_theme()->get('Version'));
    wp_enqueue_style('paperless-styles-blocks', get_template_directory_uri() . '/assets/css/blocks.css');

}

endif;
add_action('wp_enqueue_scripts','paperless_styles');
