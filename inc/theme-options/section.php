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