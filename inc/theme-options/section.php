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
                'id'     => 'slider-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Slider Items', 'londone-electrical'),
                'desc'   => esc_html__('Slider create home page', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'slider-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Slider Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload slider image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/hero-bg.jpg'
                        ),
                    ),
                    array(
                        'id'       => 'slider-item-title',
                        'type'     => 'text',
                        'title'    => esc_html__('Title', 'londone-electrical'),
                        'default'  => 'Your trusted partner for all your electrical needs',
                    ),
                    array(
                        'id'       => 'slider-item-text',
                        'type'     => 'textarea',
                        'title'    => esc_html__('Descripation', 'londone-electrical'),
                        'default'  => 'From small repairs to large-scale installations, our experienced electricians provide tailored solutions to power your home or business efficiently and safely.',
                    ),
                    array(
                        'id'       => 'slider-item-button1-text',
                        'type'     => 'text',
                        'title'    => esc_html__('Button1 text', 'londone-electrical'),
                        'default'  => 'Request A Quote',
                    ),
                    array(
                        'id'       => 'slider-item-button1-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Button1 link', 'londone-electrical'),
                        'default'  => '#',
                    ),
                    array(
                        'id'       => 'slider-item-button2-text',
                        'type'     => 'text',
                        'title'    => esc_html__('Button2 text', 'londone-electrical'),
                        'default'  => 'Watch Our Work',
                    ),
                    array(
                        'id'       => 'slider-item-button2-link',
                        'type'     => 'text',
                        'title'    => esc_html__('Button2 link', 'londone-electrical'),
                        'default'  => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                    ),
                ),
            ),


            // slider bottom info
            array(
            'id' => 'slider-bottom-content1',
            'type' => 'section',
            'title' => esc_html__('Contact Us', 'londone-electrical'),
            'subtitle' => esc_html__('Contact us information', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'     => 'title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Us', 'londone-electrical' ),
                    'default'  => 'Contact Us',
                     
                ),
                array(
                    'id'     => 'email',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Email', 'londone-electrical' ),
                    'default'  => 'info@domainname.com',
                ),
                array(
                    'id'     => 'phone',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Phone', 'londone-electrical' ),
                    'default'  => '(123) 465 - 798',
                ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

            array(
            'id' => 'slider-bottom-content2',
            'type' => 'section',
            'title' => esc_html__('Our Location', 'londone-electrical'),
            'subtitle' => esc_html__('Our Location information', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'     => 'location-address',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Address', 'londone-electrical' ),
                    'default'  => '4517 Washington Ave. Manchester, Kentucky 39495',
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
            'id' => 'slider-bottom-content3',
            'type' => 'section',
            'title' => esc_html__('Book Now Information', 'londone-electrical'),
            'subtitle' => esc_html__('Book Now information', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'     => 'book-now-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Contact our expert handyman today!',
                ),
                array(
                    'id'     => 'book-now-button-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button text', 'londone-electrical' ),
                    'default'  => 'Book-Now',
                ),
                array(
                    'id'     => 'book-now-button-link',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button link', 'londone-electrical' ),
                    'default'  => '#',
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

           
            array(
                'id'    => 'slider_section_end',
                'type'  => 'section',
                'indent' => false,
            ),

        ),
    )
);

//about us
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'About', 'londone-electrical' ),
        'desc'       => esc_html__( 'About section customize', 'londone-electrical' ),
        'id'         => 'about-option',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(

            array(
            'id' => 'about-experience-box',
            'type' => 'section',
            'title' => esc_html__('About Experience Box', 'londone-electrical'),
            'subtitle' => esc_html__('About Experience Box', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'       => 'about-experience-box-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Icon Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload icon image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-about-experience.svg'
                    ),
                ),
                array(
                    'id'     => 'about-experience-box-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => '425+ Years Of Experience',
                ),
                array(
                    'id'     => 'about-experience-box-desc',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'Trusted electrical experts with 25+ years of experience.',
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
            'id' => 'about-video-image',
            'type' => 'section',
            'title' => esc_html__('About Video', 'londone-electrical'),
            'subtitle' => esc_html__('About Video', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'       => 'about-video-image-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Background Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload background image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/about-image-1.jpg'
                    ),
                ),
                array(
                    'id'     => 'about-video-image-link',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Video Link', 'londone-electrical' ),
                    'default'  => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),


        ),
    )
);