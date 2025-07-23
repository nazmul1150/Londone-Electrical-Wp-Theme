<?php
     global $londone_electrical;

?>

<!-- Page Services Start -->
<div class="page-services">
        <div class="container">
            <div class="row">
               
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

                    // Permalink
                    $permalink = get_permalink();

                    // Delay animation time (e.g., 0s, 0.2s, 0.4s, etc.)
                    $delay = '0.' . ($i - 1) * 2 . 's';

                    // Make sure it doesn't exceed 1s delay visually
                    if ( $delay > 1 ) {
                        $delay = '1s';
                    }
            ?>
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="<?php echo esc_url($permalink); ?>" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Number Start -->
                        <div class="service-no">
                            <h2><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); // e.g., 01, 02 ?></h2>
                        </div>
                        <!-- Service Number End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h3>
                            <p><?php echo esc_html($excerpt); ?></p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            <?php
                $i++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            </div>
        </div>
    </div>
    <!-- Page Services End -->