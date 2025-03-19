<?php
// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section( 
    $opt_name,
    array(
        'title'  => esc_html__( 'Header', 'londone-electrical' ),
        'id'     => 'header',
        'desc'   => esc_html__( 'Header section.', 'londone-electrical' ),
        'icon'   => 'el el-arrow-right',
        'priority' => 1,
    )
);

Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Topbar', 'londone-electrical' ),
        'desc'       => esc_html__( 'topbar section customize', 'londone-electrical' ),
        'id'         => 'topbar-option',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'       => 'topbar-address',
                'type'     => 'text',
                'title'    => esc_html__( 'Topbar Address', 'londone-electrical' ),
                'desc'     => esc_html__( 'topbar sort adderss', 'londone-electrical' ),
                'default'  => '25 Jump St, NY 1001',
            ),
            array(
                'id'       => 'topbar-email',
                'type'     => 'text',
                'validate' => array(
                    'email'
                ),
                'title'    => esc_html__( 'Topbar Email', 'londone-electrical' ),
                'desc'     => esc_html__( 'topbar email', 'londone-electrical' ),
                'default'  => 'info@domainname.com',
            ),
            array(
                'id'    => 'topbar_section_start',
                'type'  => 'section',
                'title' => esc_html__('Topbar Information', 'londone-electrical'),
                'indent' => true, 
            ),
            array(
                'id'       => 'topbar-instagram',
                'type'     => 'text',
                'title'    => esc_html__('Instagram Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter instagram link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'topbar-facebook',
                'type'     => 'text',
                'title'    => esc_html__('Facebook Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter facebook link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'topbar-twitter',
                'type'     => 'text',
                'title'    => esc_html__('Twitter Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter twitter link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'    => 'topbar_section_end',
                'type'  => 'section',
                'indent' => false,
            ),

        ),
    )
);

Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Header', 'londone-electrical' ),
        'desc'       => esc_html__( 'header full dcustomize ', 'londone-electrical' ),
        'id'         => 'header-option',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'       => 'header-logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Header Logo', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload header logo', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/logo.svg'
                ),
            ),
            array(
                'id'    => 'header_section_start',
                'type'  => 'section',
                'title' => esc_html__('Topbar Information', 'londone-electrical'),
                'indent' => true, 
            ),
            array(
                'id'       => 'header-phone',
                'type'     => 'text',
                'title'    => esc_html__('Header Phone Number', 'londone-electrical'),
                'desc'     => esc_html__('Enter phone number.', 'londone-electrical'),
                'default'  => '(123) 456 – 789',
            ),
            array(
                'id'       => 'header-button-text',
                'type'     => 'text',
                'title'    => esc_html__('Button Text', 'londone-electrical'),
                'desc'     => esc_html__('Enter button text.', 'londone-electrical'),
                'default'  => 'Book Now',
            ),
            array(
                'id'       => 'header-button-link',
                'type'     => 'text',
                'title'    => esc_html__('Button Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter button link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'    => 'header_section_end',
                'type'  => 'section',
                'indent' => false,
            ),
        ),
    )
);
