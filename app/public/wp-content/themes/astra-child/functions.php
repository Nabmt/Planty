<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

function add_admin_link($items, $args) {

    if (is_user_logged_in() && $args->theme_location == 'primary') {
        // Creer le lien "Admin" //
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-admin"><a href="' . get_admin_url() . '">Admin</a></li>';

        // Compter le nombre total d'elements dans le menu //
        $total_items = substr_count($items, '</li>');

        // Calculer l'index median //
        $middle_index = floor($total_items / 2);

        // Trouver la position de la balise de fermeture </li> a l'index median //
        $position = strpos($items, '</li>', 0);
        for ($i = 1; $i < $middle_index; $i++) {
            $position = strpos($items, '</li>', $position + 1);
        }

        // Inserer le lien "Admin" a la position mediane //
        $items = substr_replace($items, $admin_link, $position + strlen('</li>'), 0);
    }
    return $items;
}

