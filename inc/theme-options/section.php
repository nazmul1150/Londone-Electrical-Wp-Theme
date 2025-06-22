<?php
// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section( 
    $opt_name,
    array(
        'title'  => esc_html__( 'Page Section', 'londone-electrical' ),
        'id'     => 'page_section',
        'desc'   => esc_html__( 'Page Section.', 'londone-electrical' ),
        'icon'   => 'el el-arrow-right',
        'priority' => 1,
    )
);

//Slider Section
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Slider', 'londone-electrical' ),
        'desc'       => esc_html__( 'Slider section customize', 'londone-electrical' ),
        'id'         => 'slider-option',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'       => 'slider-address',
                'type'     => 'text',
                'title'    => esc_html__( 'Topbar Address', 'londone-electrical' ),
                'desc'     => esc_html__( 'topbar sort adderss', 'londone-electrical' ),
                'default'  => '25 Jump St, NY 1001',
            ),
            array(
                'id'       => 'slider-email',
                'type'     => 'text',
                'validate' => array(
                    'email'
                ),
                'title'    => esc_html__( 'Topbar Email', 'londone-electrical' ),
                'desc'     => esc_html__( 'topbar email', 'londone-electrical' ),
                'default'  => 'info@domainname.com',
            ),
            array(
                'id'    => 'slider_section_start',
                'type'  => 'section',
                'title' => esc_html__('Topbar Information', 'londone-electrical'),
                'indent' => true, 
            ),
            array(
                'id'       => 'slider-instagram',
                'type'     => 'text',
                'title'    => esc_html__('Instagram Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter instagram link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'slider-facebook',
                'type'     => 'text',
                'title'    => esc_html__('Facebook Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter facebook link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'slider-twitter',
                'type'     => 'text',
                'title'    => esc_html__('Twitter Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter twitter link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'    => 'slider_section_end',
                'type'  => 'section',
                'indent' => false,
            ),

        ),
    )
);