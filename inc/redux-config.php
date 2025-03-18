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

 Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Basic Field', 'londone-electrical' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Basic field with no subsections.', 'londone-electrical' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Example Text', 'londone-electrical' ),
                'desc'     => esc_html__( 'Example description.', 'londone-electrical' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'londone-electrical' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) 
);

// $args = array(
//     'opt_name'  => $opt_name,
//     'display_name' => 'Theme Options',
//     'menu_title' => 'Theme Options',
//     'page_slug' => 'theme-options',
//     'menu_type' => 'menu',
//     'allow_sub_menu' => true,
//     'admin_bar' => true,
//     'customizer' => true,
// );

//Redux::setArgs($opt_name, $args);

// General Settings Section
// Redux::setSection($opt_name, array(
//     'title'  => 'General Settings',
//     'id'     => 'general',
//     'desc'   => 'Basic theme settings',
//     'fields' => array(
//         array(
//             'id'       => 'logo',
//             'type'     => 'media',
//             'title'    => 'Site Logo',
//             'subtitle' => 'Upload your site logo here.',
//         ),
//         array(
//             'id'       => 'footer_text',
//             'type'     => 'text',
//             'title'    => 'Footer Text',
//             'default'  => '© 2025 My Theme. All rights reserved.',
//         ),
//     )
// ));
