
<?php
     global $londone_electrical;
     $our_service_subtitle = !empty($londone_electrical['our-service-subtitle']) ? esc_html($londone_electrical['our-service-subtitle']) : '';
     $our_service_title = !empty($londone_electrical['our-service-title']) ? esc_html($londone_electrical['our-service-title']) : '';
     $our_service_title_span = !empty($londone_electrical['our-service-title-span']) ? esc_html($londone_electrical['our-service-title-span']) : '';
     $our_service_bottom_text = !empty($londone_electrical['our-service-bottom-text']) ? esc_html($londone_electrical['our-service-bottom-text']) : '';
     $our_service_bottom_link_text = !empty($londone_electrical['our-service-bottom-link-text']) ? esc_html($londone_electrical['our-service-bottom-link-text']) : '';
     $our_service_bottom_link_text_link = !empty($londone_electrical['our-service-bottom-link-text-link']) ? esc_html($londone_electrical['our-service-bottom-link-text-link']) : '';

?>

<!-- Our Services Section Start -->
<div class="our-services bg-section dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_service_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_service_title); ?> <span><?php echo esc_html($our_service_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <!-- Services Slider Start -->
                    <div class="services-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                            <?php
                            $args = array(
                                'post_type'      => 'services',
                                'posts_per_page' => -1,
                                'order'          => 'DESC',
                            );

                            $service_query = new WP_Query($args);

                            if ( $service_query->have_posts() ) :
                                $i = 1;
                                while ( $service_query->have_posts() ) : $service_query->the_post();

                                    // Featured Image
                                    $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/images/default-service.jpg';

                                    // Title
                                    $title = get_the_title();

                                    // Excerpt or trimmed content
                                    $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 15 );
                            ?>
                                <!-- Services Slide Start -->
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <!-- Service Image Start -->
                                        <div class="service-image">
                                            <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Service Image End -->

                                        <!-- Service Number Start -->
                                        <div class="service-no">
                                            <h2><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></h2>
                                        </div>
                                        <!-- Service Number End -->

                                        <!-- Service Content Start -->
                                        <div class="service-content">
                                            <h3><a href="<?php the_permalink(); ?>"><?php echo esc_html($title); ?></a></h3>
                                            <p><?php echo esc_html($excerpt); ?></p>
                                        </div>
                                        <!-- Service Content End -->
                                    </div>
                                </div>
                                <!-- Services Slide End -->
                            <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                            </div>
                            <div class="services-pagination"></div>
                        </div>
                    </div>
                    <!-- Services Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
                        <p><?php echo esc_html($our_service_bottom_text); ?> <?php if (! empty($our_service_bottom_link_text_link)){ ?><a href="<?php echo esc_url($our_service_bottom_link_text_link); ?>"><?php echo esc_html($our_service_bottom_link_text); ?></a><?php } ?></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->