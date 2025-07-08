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
                // 'sortable' => true,
                // 'multi' => true,
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
                    'id'     => 'slider-bottom-content1-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Us', 'londone-electrical' ),
                    'default'  => 'Contact Us',
                     
                ),
                array(
                    'id'     => 'slider-bottom-content1-email',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Email', 'londone-electrical' ),
                    'default'  => 'info@domainname.com',
                ),
                array(
                    'id'     => 'slider-bottom-content1-phone',
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
                    'id'     => 'slider-bottom-content2-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Our Location', 'londone-electrical' ),
                    'default'  => 'Our Location',
                     
                ),
                array(
                    'id'     => 'slider-bottom-content2-location-address',
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
                    'id'     => 'slider-bottom-content3-book-now-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Contact our expert handyman today!',
                ),
                array(
                    'id'     => 'slider-bottom-content3-book-now-button-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button text', 'londone-electrical' ),
                    'default'  => 'Book-Now',
                ),
                array(
                    'id'     => 'slider-bottom-content3-book-now-button-link',
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
                    'id'     => 'about-experience-box-title-count',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Count Number', 'londone-electrical' ),
                    'default'  => '25',
                ),
                array(
                    'id'     => 'about-experience-box-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Years Of Experience',
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
                    'id'       => 'about-video-image-bgimg',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Background Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload background image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/about-image-1.jpg'
                    ),
                ),
                array(
                    'id'     => 'about-video-image-video_link',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Video Link', 'londone-electrical' ),
                    'default'  => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

            array(
            'id' => 'about-image',
            'type' => 'section',
            'title' => esc_html__('About Image', 'londone-electrical'),
            'subtitle' => esc_html__('About Image', 'londone-electrical'),
            'indent' => true 
            ),
                array(
                    'id'       => 'about-image-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'About Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload about image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/about-image-2.jpg'
                    ),
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

            array(
            'id' => 'about-us-content-section',
            'type' => 'section',
            'title' => esc_html__('About Us Content', 'londone-electrical'),
            'subtitle' => esc_html__('About us content', 'londone-electrical'),
            'indent' => true 
            ),
               array(
                    'id'     => 'about-us-content-subtitle',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                    'default'  => 'about us',
                ),
               array(
                    'id'     => 'about-us-content-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Complete electrical services for',
                ),
               array(
                    'id'     => 'about-us-content-title-span',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                    'default'  => 'every need',
                ),
               array(
                    'id'     => 'about-us-content-desc',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'From small repairs to large-scale installations our experienced electricians provide tailored solutions to power your home.',
                ),

                array(
                    'id' => 'about-us-content-section-icon1',
                    'type' => 'section',
                    'title' => esc_html__('Icon1 Content', 'londone-electrical'),
                    'subtitle' => esc_html__('Icon1 content', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'about-us-content-icon1',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Icon Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload icon image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/icon-about-service-1.svg'
                        ),
                    ),
                    array(
                        'id'     => 'about-us-content-icon1-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Providing Awesome Service',
                    ),
                array(
                        'id'     => 'about-us-content-icon1-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Skilled professionals dedicated to delivering quality.',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                array(
                    'id' => 'about-us-content-section-icon2',
                    'type' => 'section',
                    'title' => esc_html__('Icon2 Content', 'londone-electrical'),
                    'subtitle' => esc_html__('Icon2 content', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'about-us-content-icon2',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Icon Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload icon image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/icon-about-service-2.svg'
                        ),
                    ),
                    array(
                        'id'     => 'about-us-content-icon2-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => '24/7 Our Support',
                    ),
                array(
                        'id'     => 'about-us-content-icon2-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Round-the-clock support for all your urgent repair needs.',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                array(
                    'id' => 'about-us-content-section-action-btn',
                    'type' => 'section',
                    'title' => esc_html__('Action Button', 'londone-electrical'),
                    'subtitle' => esc_html__('Button content', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'     => 'about-us-content-action-btn-text',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Button Text', 'londone-electrical' ),
                        'default'  => 'more about us',
                    ),
                    array(
                        'id'     => 'about-us-content-action-btn-link',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Button Link', 'londone-electrical' ),
                        'default'  => '#',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),


        ),
    )
);

//Service
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Service', 'londone-electrical' ),
        'desc'       => esc_html__( 'Service section customize', 'londone-electrical' ),
        'id'         => 'service-option',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-service-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'Our Services',
            ),
            array(
                'id'     => 'our-service-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Specialized electrical services for',
            ),
            array(
                'id'     => 'our-service-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'every industry',
            ),
            array(
                'id'     => 'our-service-bottom-text',
                'type'   => 'text',
                'title'  => esc_html__( 'Service Bottom Text', 'londone-electrical' ),
                'default'  => 'Professional electrical solutions for every need.',
            ),
            array(
                'id'     => 'our-service-bottom-link-text',
                'type'   => 'text',
                'title'  => esc_html__( 'Service Bottom Link Text', 'londone-electrical' ),
                'default'  => 'Contact us today!',
            ),
            array(
                'id'     => 'our-service-bottom-link-text-link',
                'type'   => 'text',
                'title'  => esc_html__( 'Service Bottom Text Link', 'londone-electrical' ),
                'default'  => '#',
            ),
        ),
    )
);

//our-awards
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Awards', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our awards section customize', 'londone-electrical' ),
        'id'         => 'our-awards-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-awards-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'Awards and certification',
            ),
            array(
                'id'     => 'our-awards-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Awards and certifications that reflec',
            ),
            array(
                'id'     => 'our-awards-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'our commitment',
            ),
            array(
                'id'     => 'our-awards-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => "Over the years, we've earned awards and accreditations that underscore our unwavering focus on quality, safety.",
            ),

            array(
                'id' => 'our-awards-list',
                'type' => 'section',
                'title' => esc_html__('Our Awards List', 'londone-electrical'),
                'subtitle' => esc_html__('Our Awards List', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id' => 'our-awards-list1',
                    'type' => 'section',
                    'title' => esc_html__('Our Awards List1', 'londone-electrical'),
                    'subtitle' => esc_html__('Our Awards List1', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-awards-list1-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Awards List1 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/awards-1.png'
                        ),
                    ),
                    array(
                        'id'     => 'our-awards-list1-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Certified Master Electrician Accreditation',
                    ),
                    array(
                        'id'     => 'our-awards-list1-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Awarded to our lead electricians for demonstrating superior technical expertise and industry knowledge',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                array(
                    'id' => 'our-awards-list2',
                    'type' => 'section',
                    'title' => esc_html__('Our Awards List2', 'londone-electrical'),
                    'subtitle' => esc_html__('Our Awards List2', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-awards-list2-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Awards List2 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list2 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/awards-2.png'
                        ),
                    ),
                    array(
                        'id'     => 'our-awards-list2-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Best Residential Electrician Service (2023)',
                    ),
                    array(
                        'id'     => 'our-awards-list2-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Voted as the top choice for homeowners in delivering safe and reliable electrical solutions.',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                array(
                    'id' => 'our-awards-list3',
                    'type' => 'section',
                    'title' => esc_html__('Our Awards List3', 'londone-electrical'),
                    'subtitle' => esc_html__('Our Awards List3', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-awards-list3-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Awards List3 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list3 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/awards-3.png'
                        ),
                    ),
                    array(
                        'id'     => 'our-awards-list3-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Industry Excellence Certificate by IEC',
                    ),
                    array(
                        'id'     => 'our-awards-list3-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Certified by the International Electrical Contractors Association for adhering to global standards.',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

                array(
                    'id' => 'our-awards-list4',
                    'type' => 'section',
                    'title' => esc_html__('Our Awards List4', 'londone-electrical'),
                    'subtitle' => esc_html__('Our Awards List4', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-awards-list4-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Awards List4 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list4 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/awards-4.png'
                        ),
                    ),
                    array(
                        'id'     => 'our-awards-list4-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Emergency Service Provider Recognition',
                    ),
                    array(
                        'id'     => 'our-awards-list4-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'Honored for delivering fast and efficient 24/7 emergency electrical repairs.',
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
                
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

        )
    )
);


//our-features
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Features', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our features section customize', 'londone-electrical' ),
        'id'         => 'our-features-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(

            array(
                'id'     => 'our-features-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'our features',
            ),
            array(
                'id'     => 'our-features-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Features that define our quality',
            ),
            array(
                'id'     => 'our-features-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'and reliability',
            ),
            array(
                'id'       => 'our-features-img',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Image', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/intro-bg-image.jpg'
                ),
            ),
            array(
                'id'     => 'our-features-img-video-link',
                'type'   => 'text',
                'title'  => esc_html__( 'Video Link', 'londone-electrical' ),
                'default'  => 'https://www.youtube.com/watch?v=Y-x0efG1seA',
            ),

            array(
                    'id' => 'our-features-list',
                    'type' => 'section',
                    'title' => esc_html__('Our Features Lists', 'londone-electrical'),
                    'subtitle' => esc_html__('Our Features Lists', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id' => 'our-features-list1',
                        'type' => 'section',
                        'title' => esc_html__('Our Features List1', 'londone-electrical'),
                        'subtitle' => esc_html__('Our Features List1', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-features-list1-img',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Features List1 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-features-list-1.svg'
                            ),
                        ),
                        array(
                            'id'     => 'our-features-list1-title',
                            'type'   => 'text',
                            'title'  => esc_html__( 'Title', 'londone-electrical' ),
                            'default'  => '24/7 Emergency Services',
                        ),
                        array(
                            'id'     => 'our-features-list1-desc',
                            'type'   => 'textarea',
                            'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                            'default'  => "We're here for you any time, day or night, to resolve urgent issues.",
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'our-features-list2',
                        'type' => 'section',
                        'title' => esc_html__('Our Features List2', 'londone-electrical'),
                        'subtitle' => esc_html__('Our Features List2', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-features-list2-img',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Features List2 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-features-list-2.svg'
                            ),
                        ),
                        array(
                            'id'     => 'our-features-list2-title',
                            'type'   => 'text',
                            'title'  => esc_html__( 'Title', 'londone-electrical' ),
                            'default'  => 'Advanced Technology',
                        ),
                        array(
                            'id'     => 'our-features-list2-desc',
                            'type'   => 'textarea',
                            'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                            'default'  => "We use state-of-the-art tools and techniques to deliver efficient.",
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'our-features-list3',
                        'type' => 'section',
                        'title' => esc_html__('Our Features List3', 'londone-electrical'),
                        'subtitle' => esc_html__('Our Features List3', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-features-list3-img',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Features List3 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-features-list-3.svg'
                            ),
                        ),
                        array(
                            'id'     => 'our-features-list3-title',
                            'type'   => 'text',
                            'title'  => esc_html__( 'Title', 'londone-electrical' ),
                            'default'  => 'Safety First Approach',
                        ),
                        array(
                            'id'     => 'our-features-list3-desc',
                            'type'   => 'textarea',
                            'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                            'default'  => "Your safety is our top priority. We follow strict industry standards.",
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'our-features-list4',
                        'type' => 'section',
                        'title' => esc_html__('Our Features List4', 'londone-electrical'),
                        'subtitle' => esc_html__('Our Features List4', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-features-list4-img',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Features List4 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-features-list-4.svg'
                            ),
                        ),
                        array(
                            'id'     => 'our-features-list4-title',
                            'type'   => 'text',
                            'title'  => esc_html__( 'Title', 'londone-electrical' ),
                            'default'  => 'Customizable Solutions',
                        ),
                        array(
                            'id'     => 'our-features-list4-desc',
                            'type'   => 'textarea',
                            'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                            'default'  => "We provide tailored electrical services designed.",
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

        ),
    )
);

//our-goals
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Goals', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our goals section customize', 'londone-electrical' ),
        'id'         => 'our-goals-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            
            array(
                'id'     => 'our-goals-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'our Goals',
            ),
            array(
                'id'     => 'our-goals-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Our goals to deliver top-notch',
            ),
            array(
                'id'     => 'our-goals-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'electrical solutions',
            ),
            array(
                'id'     => 'our-goals-title-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => 'Our goal is to be a leader in providing environmentally conscious electrical services. We focus on energy-efficient solutions and sustainable practices to not only meet industry standards but to exceed them.',
            ),

            array(
                'id' => 'our-goals-content-list',
                'type' => 'section',
                'title' => esc_html__('Goals Content ', 'londone-electrical'),
                'subtitle' => esc_html__('Goals content ', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id' => 'our-goals-content-list1',
                    'type' => 'section',
                    'title' => esc_html__('Goals Content List1', 'londone-electrical'),
                    'subtitle' => esc_html__('Goals content list1', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-goals-list1-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Goals Content List1 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list1 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/icon-goals-item-1.svg'
                        ),
                    ),
                    array(
                        'id'     => 'our-goals-list1-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Commitment to Innovation',
                    ),
                    array(
                        'id'     => 'our-goals-list1-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => "We strive to continuously innovate, incorporating.",
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
                array(
                    'id' => 'our-goals-content-list2',
                    'type' => 'section',
                    'title' => esc_html__('Goals Content List2', 'londone-electrical'),
                    'subtitle' => esc_html__('Goals content list2', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-goals-list2-img',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Goals Content List2 Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload list2 image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/icon-goals-item-2.svg'
                        ),
                    ),
                    array(
                        'id'     => 'our-goals-list2-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => 'Customer-Centric Focus',
                    ),
                    array(
                        'id'     => 'our-goals-list2-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => "We aim to build long-lasting relationships by providing.",
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            array(
            'id'     => 'section-end',
            'type'   => 'section',
            'indent' => false,
            ),

        array(
                'id' => 'our-goals-images',
                'type' => 'section',
                'title' => esc_html__('Goals Images', 'londone-electrical'),
                'subtitle' => esc_html__('Goals images', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'our-goals-images1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Our Goals Images1', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/our-goals-img-1.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-goals-images2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Our Goals Images2', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/our-goals-img-2.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-goals-images3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Our Goals Images3', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/our-goals-img-3.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-goals-images4',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Our Goals Images4', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/our-goals-img-4.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-goals-images5',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Our Goals circle Images', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/contact-now-circle.png'
                    ),
                ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),



        )

    )
);

//our-facts-box

Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Facts', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our facts section customize', 'londone-electrical' ),
        'id'         => 'our-facts-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(

            array(
                'id'     => 'our-facts-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'get a estimate',
            ),
            array(
                'id'     => 'our-facts-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'Hassle-free estimates just a',
            ),
            array(
                'id'     => 'our-facts-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'click away',
            ),
            array(
                'id'     => 'our-facts-title-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => 'Our goal is to be a leader in providing environmentally conscious electrical services. We focus on energy-efficient solutions.',
            ),

            array(
                'id'     => 'our-facts-lists',
                'type'   => 'repeater',
                'title'  => esc_html__('Our Facts Lists', 'londone-electrical'),
                'desc'   => esc_html__('Our facts fists', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'     => 'our-facts-list',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Our Facts List', 'londone-electrical' ),
                        'default'  => 'Seasonal & Locally Sourced Ingredients',
                    ),
                ),
            ),

            array(
                    'id' => 'our-facts-images',
                    'type' => 'section',
                    'title' => esc_html__('Our Facts Image', 'londone-electrical'),
                    'subtitle' => esc_html__('our facts images', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id'       => 'our-facts-image1',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Facts Image1', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/facts-image.png'
                        ),
                    ),
                    array(
                        'id'       => 'our-facts-image2',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Our Facts Image2', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/contact-now-circle.png'
                        ),
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            array(
                    'id' => 'facts-counter-box',
                    'type' => 'section',
                    'title' => esc_html__('Our Facts Counter', 'londone-electrical'),
                    'subtitle' => esc_html__('our facts counter', 'londone-electrical'),
                    'indent' => true 
                ),
                    array(
                        'id' => 'facts-counter-box1',
                        'type' => 'section',
                        'title' => esc_html__('Our Facts Counter1', 'londone-electrical'),
                        'subtitle' => esc_html__('our facts counter1', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-facts-counter1-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Facts Counter1 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-facts-counter-1.svg'
                            ),
                        ),
                        array( 
                            'id' => 'our-facts-counter1-number',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Number', 'londone-electrical' ),
                            'data' => array(
                                'count-number' => '500',
                                'count-increment' => '+',
                            )
                        ),
                        array( 
                            'id' => 'our-facts-counter1-desc',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Descripation', 'londone-electrical' ),
                            'default' => 'Projects Completed',
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'facts-counter-box2',
                        'type' => 'section',
                        'title' => esc_html__('Our Facts Counter2', 'londone-electrical'),
                        'subtitle' => esc_html__('our facts counter2', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-facts-counter2-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Facts Counter2 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-facts-counter-2.svg'
                            ),
                        ),
                        array( 
                            'id' => 'our-facts-counter2-number',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Number', 'londone-electrical' ),
                            'data' => array(
                                'count-number' => '1000',
                                'count-increment' => '+',
                            )
                        ),
                        array( 
                            'id' => 'our-facts-counter2-desc',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Descripation', 'londone-electrical' ),
                            'default' => 'Emergency Repairs',
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'facts-counter-box3',
                        'type' => 'section',
                        'title' => esc_html__('Our Facts Counter3', 'londone-electrical'),
                        'subtitle' => esc_html__('our facts counter3', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-facts-counter3-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Facts Counter3 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-facts-counter-3.svg'
                            ),
                        ),
                        array( 
                            'id' => 'our-facts-counter3-number',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Number', 'londone-electrical' ),
                            'data' => array(
                                'count-number' => '3500',
                                'count-increment' => '+',
                            )
                        ),
                        array( 
                            'id' => 'our-facts-counter3-desc',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Descripation', 'londone-electrical' ),
                            'default' => 'Happy Clients',
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                    array(
                        'id' => 'facts-counter-box4',
                        'type' => 'section',
                        'title' => esc_html__('Our Facts Counter4', 'londone-electrical'),
                        'subtitle' => esc_html__('our facts counter4', 'londone-electrical'),
                        'indent' => true 
                    ),
                        array(
                            'id'       => 'our-facts-counter4-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => esc_html__( 'Our Facts Counter4 Image', 'londone-electrical' ),
                            'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                            'default'  => array(
                                'url'=> get_template_directory_uri() . '/images/icon-facts-counter-4.svg'
                            ),
                        ),
                        array( 
                            'id' => 'our-facts-counter4-number',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Number', 'londone-electrical' ),
                            'data' => array(
                                'count-number' => '100',
                                'count-increment' => '+',
                            )
                        ),
                        array( 
                            'id' => 'our-facts-counter4-desc',
                            'type' => 'text',
                            'title'  => esc_html__( 'Count Descripation', 'londone-electrical' ),
                            'default' => 'Skilled Professionals',
                        ),
                     array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                    ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

        )
    )
);
//image gallery
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Image Gallery', 'londone-electrical' ),
        'desc'       => esc_html__( 'image gallery section customize', 'londone-electrical' ),
        'id'         => 'image-gallery-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(

            array(
                'id'     => 'our-gallery-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'Image Gallery',
            ),
            array(
                'id'     => 'our-gallery-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => 'High-quality electrical services without breaking',
            ),
            array(
                'id'     => 'our-gallery-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'he bank',
            ),
            array(
                'id'       => 'our-gallery-img',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Add Gallery', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
            ),
        )
    )
);


//cta box
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Cta Box', 'londone-electrical' ),
        'desc'       => esc_html__( 'Cta box section customize', 'londone-electrical' ),
        'id'         => 'cta-box-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(

            array(
                'id'     => 'cta-box-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'get a estimate',
            ),
            array(
                'id'     => 'cta-box-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "get a estimate We're here to answer your",
            ),
            array(
                'id'     => 'cta-box-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'questions and help',
            ),
            array(
                'id'     => 'cta-box-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => "Whether you're planning a new project or need emergency support, we're available to provide fast and reliable assistance.",
            ),

            array(
                'id' => 'cta-box-contact-btn',
                'type' => 'section',
                'title' => esc_html__('Contact btutton', 'londone-electrical'),
                'subtitle' => esc_html__('Contact button', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'     => 'cta-box-contact-btn-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Text', 'londone-electrical' ),
                    'default'  => 'Contact Us',
                ), 
                array(
                    'id'     => 'cta-box-contact-btn-link',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Link', 'londone-electrical' ),
                    'default'  => '#',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'cta-box-contact-info',
                'type' => 'section',
                'title' => esc_html__('Contact Info', 'londone-electrical'),
                'subtitle' => esc_html__('Contact info', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'     => 'cta-box-contact-info-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Info Text', 'londone-electrical' ),
                    'default'  => 'Call Us any time',
                ), 
                array(
                    'id'     => 'cta-box-contact-info-ph-number',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Info Phon Number', 'londone-electrical' ),
                    'default'  => '+ 0 (123) 456 789',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

            array(
                'id'       => 'cta-box-image',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Cta Box Image', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/cta-box-img.png'
                ),
            ),
        )
    )
);

//our-testimonial
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Testimonial', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our testimonial section customize', 'londone-electrical' ),
        'id'         => 'our-testimonial-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-testimonial-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'testimonials',
            ),
            array(
                'id'     => 'our-testimonial-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Testimonials that reflect our",
            ),
            array(
                'id'     => 'our-testimonial-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'consistent efforts',
            ),
            array(
                'id'     => 'our-testimonial-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => "The feedback from our clients speaks volumes about the quality of our services. Read how we've helped them with reliable solutions.",
            ),
            array(
                'id'     => 'our-testimonial-lists',
                'type'   => 'repeater',
                'title'  => esc_html__('Testimonial', 'londone-electrical'),
                'desc'   => esc_html__('Create testimonial', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'our-testimonial-image',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/author-2.jpg'
                        ),
                    ),
                    array(
                        'id'     => 'our-testimonial-name',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Name', 'londone-electrical' ),
                        'default'  => 'David Lee',
                    ),
                    array(
                        'id'     => 'our-testimonial-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => 'We hired them to handle the complete electrical setup for our office renovation, and they delivered flawlessly. From designing the layout to installing energy-efficient light and upgrading our panel, everything was done.',
                    ),
                ),
            ),
        )
    )
);


//Companies
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Companies', 'londone-electrical' ),
        'desc'       => esc_html__( 'companies section customize', 'londone-electrical' ),
        'id'         => 'companies-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'companies-text',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Text', 'londone-electrical' ),
                'default'  => "We're Trusted by more than 1000+ companies",
            ),
            array(
                'id'     => 'companies-image-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Companies Image', 'londone-electrical'),
                'desc'   => esc_html__('companies image', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'companies-image-item',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/company-logo-3.svg'
                        ),
                    ),
                ),
            ),
        )
    )
);

//our-faqs
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Faqs ', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our faqs  section customize', 'londone-electrical' ),
        'id'         => 'our-faqs-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-faqs-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'frequently asked question',
            ),
            array(
                'id'     => 'our-faqs-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Common questions about our",
            ),
            array(
                'id'     => 'our-faqs-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'services',
            ),
            array(
                'id'     => 'our-faqs-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => "The feedback from our clients speaks volumes about the quality of our services. Read how we've helped them with reliable solutions.",
            ),

            array(
                'id'       => 'our-faqs-image',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Image', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/faqs-image.jpg'
                ),
            ),

            array(
                'id'     => 'our-faqs-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Companies Image', 'londone-electrical'),
                'desc'   => esc_html__('companies image', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                     array(
                        'id'     => 'our-faqs-item-title',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Title', 'londone-electrical' ),
                        'default'  => "Q1. Are your electricians licensed and insured?",
                    ),
                    array(
                        'id'     => 'our-faqs-item-desc',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                        'default'  => "We offer a wide range of services including regular home cleaning, deep cleaning, office cleaning, move-in/move-out cleaning.",
                    ),
                ),
            ),
        )
    )
);



//our-blog
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Blog ', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our blog section customize', 'londone-electrical' ),
        'id'         => 'our-blog-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-blog-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'Latest blog',
            ),
            array(
                'id'     => 'our-blog-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Discover our latest insights and",
            ),
            array(
                'id'     => 'our-blog-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'expert advice',
            ),
        )
    )
);


//our-approach
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Approach ', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our approach section customize', 'londone-electrical' ),
        'id'         => 'our-approach-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-approach-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'our approach',
            ),
            array(
                'id'     => 'our-approach-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Powering communities with",
            ),
            array(
                'id'     => 'our-approach-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'safe & reliable solutions',
            ),
             array(
                'id' => 'mission-vision-box-list1',
                'type' => 'section',
                'title' => esc_html__('Mission', 'londone-electrical'),
                'subtitle' => esc_html__('mission', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'mission-vision-box-list1-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-our-mission.svg'
                    ),
                ),
                array(
                    'id'     => 'mission-vision-box-list1-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Mission Title', 'londone-electrical' ),
                    'default'  => 'Our mission',
                ), 
                array(
                    'id'     => 'mission-vision-box-list1-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Mission desc', 'londone-electrical' ),
                    'default'  => 'Our mission is to deliver, reliable and high-quality ensuring efficiency and excellence in every project we undertake.',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
             array(
                'id' => 'mission-vision-box-list2',
                'type' => 'section',
                'title' => esc_html__('Vision', 'londone-electrical'),
                'subtitle' => esc_html__('vision', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'mission-vision-box-list2-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-our-vision.svg'
                    ),
                ),
                array(
                    'id'     => 'mission-vision-box-list2-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Vision Title', 'londone-electrical' ),
                    'default'  => 'Our vision',
                ), 
                array(
                    'id'     => 'mission-vision-box-list2-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Vision desc', 'londone-electrical' ),
                    'default'  => 'Our vision is to deliver, reliable and high-quality ensuring efficiency and excellence in every project we undertake.',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
             array(
                'id' => 'our-approach-images',
                'type' => 'section',
                'title' => esc_html__('Images', 'londone-electrical'),
                'subtitle' => esc_html__('images', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'our-approach-img1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image1', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/approach-image-1.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-approach-img2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image2', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/approach-image-2.jpg'
                    ),
                ),
                array(
                    'id'       => 'our-approach-img3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image3', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/contact-now-circle.png'
                    ),
                ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        )
    )
);

//trusted-expert
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Trusted Expert', 'londone-electrical' ),
        'desc'       => esc_html__( 'trusted expert section customize', 'londone-electrical' ),
        'id'         => 'trusted-expert-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            //trusted-expert-images
             array(
                'id' => 'trusted-expert-images',
                'type' => 'section',
                'title' => esc_html__('Trusted expert images', 'londone-electrical'),
                'subtitle' => esc_html__('trusted expert images', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'trusted-expert-images-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/trusted-expert-image.jpg'
                    ),
                ),
                array(
                    'id'     => 'exprience-box-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Exprience box Title', 'londone-electrical' ),
                    'default'  => '2017 from our exprience',
                ), 
                array(
                    'id'     => 'exprience-box-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Exprience box text', 'londone-electrical' ),
                    'default'  => 'Since',
                ),
                array(
                    'id'       => 'trusted-expert-project-complete-list1-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Project Complete List1 Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-project-complete-1.svg'
                    ),
                ),
                array(
                    'id'     => 'trusted-expert-project-complete-list1-count',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Project Complete List1 Count', 'londone-electrical' ),
                    'default'  => '500',
                ), 
                array(
                    'id'     => 'trusted-expert-project-complete-list1-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Project Complete List1 text', 'londone-electrical' ),
                    'default'  => 'projects completed',
                ), 
                array(
                    'id'       => 'trusted-expert-project-complete-list2-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Project Complete List2 Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-project-complete-2.svg'
                    ),
                ),
                array(
                    'id'     => 'trusted-expert-project-complete-list2-count',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Project Complete List2 Count', 'londone-electrical' ),
                    'default'  => '1000',
                ), 
                array(
                    'id'     => 'trusted-expert-project-complete-list2-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Project Complete List2 text', 'londone-electrical' ),
                    'default'  => 'projects completed',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
             //trusted-expert-content
             array(
                'id' => 'trusted-expert-content',
                'type' => 'section',
                'title' => esc_html__('Trusted expert content', 'londone-electrical'),
                'subtitle' => esc_html__('trusted expert content', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'     => 'trusted-expert-content-subtitle',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                    'default'  => 'Who we are',
                ),
                array(
                    'id'     => 'trusted-expert-content-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => "Trusted experts in electrical services",
                ),
                array(
                    'id'     => 'trusted-expert-content-title-span',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                    'default'  => 'services',
                ),
                array(
                    'id'     => 'trusted-expert-content-title-desc',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'From small repairs to large-scale installations, our experienced electricians provide tailored solutions to power your home.',
                ),
                array(
                'id'     => 'trusted-expert-list-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Companies Image', 'londone-electrical'),
                'desc'   => esc_html__('companies image', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                        array(
                            'id'     => 'trusted-expert-list-item-text',
                            'type'   => 'textarea',
                            'title'  => esc_html__( 'Expert list text', 'londone-electrical' ),
                            'default'  => "Committed to delivering safe and efficient electrical solutions.",
                        ),
                    ),
                ),
                array(
                    'id'       => 'trusted-expert-content-item1-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image1', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-trusted-expert-body-1.svg'
                    ),
                ),
                array(
                    'id'     => 'trusted-expert-content-item1-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title1', 'londone-electrical' ),
                    'default'  => 'We understand that every project.',
                ),
                array(
                    'id'       => 'trusted-expert-content-item2-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image2', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-trusted-expert-body-2.svg'
                    ),
                ),
                array(
                    'id'     => 'trusted-expert-content-item2-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title2', 'londone-electrical' ),
                    'default'  => 'deliver outstanding contribute.',
                ),
                array(
                    'id'     => 'trusted-expert-content-button-text',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Text', 'londone-electrical' ),
                    'default'  => 'Know More',
                ),
                array(
                    'id'     => 'trusted-expert-content-button-link',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Link', 'londone-electrical' ),
                    'default'  => '#',
                ),
                array(
                    'id'       => 'trusted-expert-content-contact-img',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Contact Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-phone-accent.svg'
                    ),
                ),
                array(
                    'id'     => 'trusted-expert-content-now-box-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Title', 'londone-electrical' ),
                    'default'  => 'Call Us 24/7',
                ),
                array(
                    'id'     => 'trusted-expert-content-now-box-number',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Contact Number', 'londone-electrical' ),
                    'default'  => '+ 0 (123) 456 789',
                ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        )
    )
);


//why choose us
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Why Choose Us', 'londone-electrical' ),
        'desc'       => esc_html__( 'Why choose us section customize', 'londone-electrical' ),
        'id'         => 'why-choose-us-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'       => 'why-choose-us-img',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Why Choose Us Image', 'londone-electrical' ),
                'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/images/why-choose-image.jpg'
                ),
            ),
            array(
                'id'     => 'why-choose-us-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'why choose us',
            ),
            array(
                'id'     => 'why-choose-us-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Powering progress through",
            ),
            array(
                'id'     => 'why-choose-us-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'excellence',
            ),
            array(
                'id'     => 'why-choose-us-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => 'Over the years, we’ve accomplished remarkable milestones in the electrical services industry. From completing complex projects to earning',
            ),
            array(
                'id'     => 'why-choose-body-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Why choose body items', 'londone-electrical'),
                'desc'   => esc_html__('why choose body items', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'     => 'why-choose-body-item',
                        'type'   => 'textarea',
                        'title'  => esc_html__( 'Why choose body item', 'londone-electrical' ),
                        'default'  => "Committed to delivering safe and efficient electrical solutions.",
                    ),
                ),
            ),
             array(
                'id'     => 'why-choose-us-btn-text',
                'type'   => 'text',
                'title'  => esc_html__( 'Button Text', 'londone-electrical' ),
                'default'  => 'View our milestones',
            ),
             array(
                'id'     => 'why-choose-us-btn-link',
                'type'   => 'text',
                'title'  => esc_html__( 'Button Link', 'londone-electrical' ),
                'default'  => '#',
            ),
            array(
                'id' => 'why-choose-item-list1',
                'type' => 'section',
                'title' => esc_html__('Why choose item1', 'londone-electrical'),
                'subtitle' => esc_html__('why choose item1', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'why-choose-item-list1-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-why-choose-list-1.svg'
                    ),
                ),
                array(
                    'id'     => 'why-choose-item-list1-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Delivering reliable solutions',
                ), 
                array(
                    'id'     => 'why-choose-item-list1-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'Expert teams ensuring precision and safety in every project.',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'why-choose-item-list2',
                'type' => 'section',
                'title' => esc_html__('Why choose item2', 'londone-electrical'),
                'subtitle' => esc_html__('why choose item2', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'why-choose-item-list2-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-why-choose-list-2.svg'
                    ),
                ),
                array(
                    'id'     => 'why-choose-item-list2-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Commitment to excellence',
                ), 
                array(
                    'id'     => 'why-choose-item-list2-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'Expert teams ensuring precision and safety in every project.',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'why-choose-item-list3',
                'type' => 'section',
                'title' => esc_html__('Why choose item3', 'londone-electrical'),
                'subtitle' => esc_html__('why choose item3', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'why-choose-item-list3-image',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/icon-why-choose-list-3.svg'
                    ),
                ),
                array(
                    'id'     => 'why-choose-item-list3-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => 'Your trusted partner',
                ), 
                array(
                    'id'     => 'why-choose-item-list3-text',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'Expert teams ensuring precision and safety in every project.',
                ), 
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            

        )
    )
);

//Our Team
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Our Team', 'londone-electrical' ),
        'desc'       => esc_html__( 'Our Team section customize', 'londone-electrical' ),
        'id'         => 'our-team-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'our-team-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'Join our team',
            ),
            array(
                'id'     => 'our-team-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Join us in powering a safer and",
            ),
            array(
                'id'     => 'our-team-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => 'brighter future',
            ),
            array(
                'id'     => 'our-team-items',
                'type'   => 'repeater',
                'title'  => esc_html__('Team items', 'londone-electrical'),
                'desc'   => esc_html__('Team items', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'       => 'our-team-item-image',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => esc_html__( 'Image', 'londone-electrical' ),
                        'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                        'default'  => array(
                            'url'=> get_template_directory_uri() . '/images/team-1.jpg'
                        ),
                    ),
                    array(
                        'id'     => 'our-team-item-name',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Name', 'londone-electrical' ),
                        'default'  => "Michael Johnson",
                    ),
                    array(
                        'id'     => 'our-team-item-designation',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Designation', 'londone-electrical' ),
                        'default'  => "Security Officer",
                    ),
                    array(
                        'id'     => 'our-team-item-social-link-facebook',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Facebook Link', 'londone-electrical' ),
                        'default'  => "#",
                    ),
                    array(
                        'id'     => 'our-team-item-social-link-x',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Twitter/X Link', 'londone-electrical' ),
                        'default'  => "#",
                    ),
                ),
            ),
        )
    )
);

//company-values
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Company Values', 'londone-electrical' ),
        'desc'       => esc_html__( 'company values section customize', 'londone-electrical' ),
        'id'         => 'company-values-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            //company-values-images
            array(
                'id' => 'company-values-images',
                'type' => 'section',
                'title' => esc_html__('Company values images', 'londone-electrical'),
                'subtitle' => esc_html__('company values images', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'       => 'company-values-image-1',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image 1', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/company-values-image-1.jpg'
                    ),
                ),
                array(
                    'id'       => 'company-values-image-2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image 2', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/company-values-image-2.jpg'
                    ),
                ),
                array(
                    'id'       => 'company-values-image-3',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => esc_html__( 'Image 3', 'londone-electrical' ),
                    'desc'     => esc_html__( 'Upload image', 'londone-electrical' ),
                    'default'  => array(
                        'url'=> get_template_directory_uri() . '/images/contact-now-circle.png'
                    ),
                ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),

            //company-values-content
             array(
                'id' => 'company-values-content',
                'type' => 'section',
                'title' => esc_html__('Company values content', 'londone-electrical'),
                'subtitle' => esc_html__('company values content', 'londone-electrical'),
                'indent' => true 
            ),
                array(
                    'id'     => 'company-values-content-subtitle',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                    'default'  => 'Our Core Values',
                ),
                array(
                    'id'     => 'company-values-content-title',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'londone-electrical' ),
                    'default'  => "Guiding principles behind our",
                ),
                array(
                    'id'     => 'company-values-content-title-span',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                    'default'  => 'excellence',
                ),
                array(
                    'id'     => 'company-values-content-title-desc ',
                    'type'   => 'textarea',
                    'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                    'default'  => 'Our goal is to be a leader in providing environmentally conscious electrical services. We focus on energy-efficient solutions.',
                ),
                array(
                'id'     => 'company-values-counters',
                'type'   => 'repeater',
                'title'  => esc_html__('Company Values Counters', 'londone-electrical'),
                'desc'   => esc_html__('company values counters', 'londone-electrical'),
                'group_values' => true,
                'fields' => array(
                    array(
                        'id'     => 'values-counter-item-number',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Counter Number', 'londone-electrical' ),
                        'default'  => "250",
                    ),
                    array(
                        'id'     => 'values-counter-item-text',
                        'type'   => 'text',
                        'title'  => esc_html__( 'Counter Text', 'londone-electrical' ),
                        'default'  => "Trusted client",
                    ),
                ),
              ),
            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        )
    )
);


//page-contact-us
Redux::set_section( 
    $opt_name,
    array(
        'title'      => esc_html__( 'Contact Us', 'londone-electrical' ),
        'desc'       => esc_html__( 'contact us section customize', 'londone-electrical' ),
        'id'         => 'page-contact-us-section',
        'subsection' => true,
        'priority' => 1,
        'fields'     => array(
            array(
                'id'     => 'page-contact-us-subtitle',
                'type'   => 'text',
                'title'  => esc_html__( 'Subtitle', 'londone-electrical' ),
                'default'  => 'contact us',
            ),
            array(
                'id'     => 'page-contact-us-title',
                'type'   => 'text',
                'title'  => esc_html__( 'Title', 'londone-electrical' ),
                'default'  => "Contact us &",
            ),
            array(
                'id'     => 'page-contact-us-title-span',
                'type'   => 'text',
                'title'  => esc_html__( 'Title Span', 'londone-electrical' ),
                'default'  => "let’s collaborate!",
            ),
            array(
                'id'     => 'page-contact-us-title-desc',
                'type'   => 'textarea',
                'title'  => esc_html__( 'Descripation', 'londone-electrical' ),
                'default'  => 'From small repairs to large-scale installations, our experience electricians provide tailored solutions to power your home.',
            ),
            array(
                'id'     => 'page-contact-us-form-shortcode',
                'type'   => 'text',
                'title'  => esc_html__( 'Contact Form Shortcode', 'londone-electrical' ),
                'desc'     => 'You can enter contact form shortcode here.',
                'default'  => '[your_contact_form_shortcode]',
            ),
            array(
                'id'     => 'page-contact-us-form-shortcode',
                'type'   => 'text',
                'title'  => esc_html__( 'Contact Form Shortcode', 'londone-electrical' ),
                'desc'     => 'You can enter contact form shortcode here.',
                'default'  => '[your_contact_form_shortcode]',
            ),
            array(
                'id'       => 'page-contact-us-map_iframe',
                'type'     => 'textarea',
                'title'    => 'Google Map Embed Code',
                'desc'     => 'Paste your iframe embed code here.',
                'default'  => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ),


           // Icon/Image Upload Field
            array(
                'id'       => 'page-contact-us_location_icon',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Location Icon',
                'desc'     => 'Upload an icon for location section.',
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/icon-location.svg',
                ),
            ),

            // Title Field
            array(
                'id'       => 'page-contact-us_location_title',
                'type'     => 'text',
                'title'    => 'Location Title',
                'default'  => 'Location',
            ),

            // Address Field
            array(
                'id'       => 'page-contact-us_location_address',
                'type'     => 'textarea',
                'title'    => 'Location Address',
                'default'  => '3891 Ranchview. Richardson, California 62639 United Kingdoms 56',
            ),


            // Icon/Image Upload Field
            array(
                'id'       => 'page-contact-us_email_icon',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Email Icon',
                'desc'     => 'Upload an icon for email section.',
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/icon-mail-primary.svg',
                ),
            ),
            // Title Field
            array(
                'id'       => 'page-contact-us_email_title',
                'type'     => 'text',
                'title'    => 'Email Title',
                'default'  => 'Email',
            ),

            // Email Address
            array(
                'id'       => 'page-contact-us_email_address',
                'type'     => 'text',
                'title'    => 'Email Address',
                'validate' => 'email',
                'default'  => 'info@domainname.com',
            ),

             // Phone Icon
            array(
                'id'       => 'page-contact-us_phone_icon',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Phone Icon',
                'default'  => array(
                    'url' => get_template_directory_uri() . '/images/icon-phone-primary.svg',
                ),
            ),

            // Section Title
            array(
                'id'       => 'page-contact-us_phone_title',
                'type'     => 'text',
                'title'    => 'Phone Title',
                'default'  => 'Phone',
            ),

            // Phone Number
            array(
                'id'       => 'page-contact-us_phone_number',
                'type'     => 'text',
                'title'    => 'Phone Number',
                'default'  => '+01 456 785 889',
            ),

        )
    )
);

