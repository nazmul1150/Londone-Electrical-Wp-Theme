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
        'priority' => 2,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Text Area Field', 'londone-electrical' ),
                'subtitle' => esc_html__( 'Subtitle', 'londone-electrical' ),
                'desc'     => esc_html__( 'Field Description', 'londone-electrical' ),
                'default'  => 'Default Text',
            ),
        ),
    )
);