<?php

if (!class_exists('Redux')) {
    return;
}

$opt_name = 'londone_electrical';

$theme = wp_get_theme();

$args = array(
    'opt_name'       => $opt_name,
    'display_name'   => esc_html__( 'Londone Electrical Theme Options', 'londone-electrical' ),
    'menu_title'     => esc_html__( 'Theme Options', 'londone-electrical' ),
    'page_slug'      => 'theme-options',
    'menu_type'      => 'menu',
    'page_priority'  => 50,
    'allow_sub_menu' => true,
    'admin_bar'      => true,
    'customizer'     => true,
    'dev_mode'       => false,
);

Redux::set_args( $opt_name, $args );

// Theme Options Folder
$theme_option_files = glob(get_template_directory() . '/inc/theme-options/*.php');

if (!empty($theme_option_files)) {
    foreach ($theme_option_files as $file) {
        require_once $file;
    }
}