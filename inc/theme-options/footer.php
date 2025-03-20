<?php
// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Footer', 'londone-electrical' ),
        'id'     => 'footer',
        'desc'   => esc_html__( 'Footer section.', 'londone-electrical' ),
        'icon'   => 'el el-arrow-right',
        'priority' => 4,
        'fields' => array(
            array(
                'id'       => 'opt-text1',
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

//column 1
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Column 1', 'londone-electrical' ),
        'desc'       => esc_html__( 'Footer column 1', 'londone-electrical' ),
        'id'         => 'footer-colum1',
        'subsection' => true,
        'priority' => 4,
        'fields'     => array(
            array(
                'id'       => 'footer-logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Footer Logo', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload footer logo', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/footer-logo.svg'
                ),
            ),
            array(
                'id'       => 'footer-column1-text',
                'type'     => 'textarea',
                'title'    => esc_html__('About Footer Content', 'londone-electrical'),
                'desc'     => esc_html__('about footer content.', 'londone-electrical'),
                'default'  => 'Licensed electricians delivering exceptional service and peace of mind. Contact us anytime',
            ),
        ),
    )
);
//column 2
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Column 2', 'londone-electrical' ),
        'desc'       => esc_html__( 'Footer column 2', 'londone-electrical' ),
        'id'         => 'footer-colum2',
        'subsection' => true,
        'priority' => 4,
        'fields'     => array(
            array(
                'id'       => 'footer-column2-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Quick Link',
            ),
            array(
                'id'     => 'footer-column2-links',
                'type'   => 'repeater',
                'title'  => esc_html__('Footer Column Links', 'londone-electrical'),
                'desc'   => esc_html__('Footer Column menu links.', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'footer-column2-link-text',
                        'type'     => 'text',
                        'title'    => esc_html__('Text', 'londone-electrical'),
                        'default'  => 'Home',
                    ),
                    array(
                        'id'       => 'footer-column2-link-url',
                        'type'     => 'text',
                        'title'    => esc_html__('Text Link', 'londone-electrical'),
                        'default'  => '#',
                    ),
                ),
            ),
            
        ),
    )
);
//column 3
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Column 3', 'londone-electrical' ),
        'desc'       => esc_html__( 'Footer column 3', 'londone-electrical' ),
        'id'         => 'footer-colum3',
        'subsection' => true,
        'priority' => 4,
        'fields'     => array(
            array(
                'id'       => 'footer-column3-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Contact Us',
            ),
            array(
                'id'       => 'footer-column3-address',
                'type'     => 'text',
                'title'    => esc_html__( 'Address', 'londone-electrical' ),
                'default'  => '3891 Ranchview Dr. richardson, california 17',
            ),
            array(
                'id'     => 'footer-column3-emails',
                'type'   => 'repeater',
                'title'  => esc_html__('Email', 'londone-electrical'),
                'desc'   => esc_html__('Enter your email.', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'footer-column3-email',
                        'type'     => 'text',
                        'title'    => esc_html__('Text', 'londone-electrical'),
                        'default'  => 'info@domain.com',
                    ),
                ),
            ),
            array(
                'id'     => 'footer-column3-phons',
                'type'   => 'repeater',
                'title'  => esc_html__('Phone Number', 'londone-electrical'),
                'desc'   => esc_html__('Enter your phone number.', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'footer-column3-phone',
                        'type'     => 'text',
                        'title'    => esc_html__('Phone Number', 'londone-electrical'),
                        'default'  => '+01 456 785 889',
                    ),
                ),
            ),
        ),
    )
);
//column 4
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Column 4', 'londone-electrical' ),
        'desc'       => esc_html__( 'Footer column 4', 'londone-electrical' ),
        'id'         => 'footer-colum4',
        'subsection' => true,
        'priority' => 4,
        'fields'     => array(
            array(
                'id'       => 'footer-column4-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Get in touch',
            ),
            array(
                'id'       => 'footer-column4-text',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Text', 'londone-electrical' ),
                'default'  => 'Sign up for alerts, our latest blogs, thoughts, and insights',
            ),
            array(
                'id'       => 'footer-column4-mailchimp-api',
                'type'     => 'text',
                'title'    => esc_html__( 'Mailchimp Api', 'londone-electrical' ),
                'default'  => 'https://mailchimp.com/api',
            ),
        ),
    )
);
//copyright area
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Copyright', 'londone-electrical' ),
        'desc'       => esc_html__( 'Copyright area', 'londone-electrical' ),
        'id'         => 'footer-copyright',
        'subsection' => true,
        'priority' => 4,
        'fields'     => array(
            array(
                'id'       => 'footer-copyright-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Text', 'londone-electrical' ),
                'default'  => 'All Rights Reserved.',
            ),
            array(
                'id'    => 'section_start',
                'type'  => 'section',
                'title' => esc_html__('Topbar Information', 'londone-electrical'),
                'indent' => true, 
            ),
            array(
                'id'       => 'footer-copyright-instagram',
                'type'     => 'text',
                'title'    => esc_html__('Instagram Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter instagram link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'footer-copyright-facebook',
                'type'     => 'text',
                'title'    => esc_html__('Facebook Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter facebook link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'       => 'footer-copyright-twitter',
                'type'     => 'text',
                'title'    => esc_html__('Twitter Link', 'londone-electrical'),
                'desc'     => esc_html__('Enter twitter link.', 'londone-electrical'),
                'default'  => '#',
            ),
            array(
                'id'    => 'section_end',
                'type'  => 'section',
                'indent' => false,
            ),
        ),
    )
);