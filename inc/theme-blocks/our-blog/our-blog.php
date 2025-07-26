 <?php
     global $londone_electrical;

     $our_blog_subtitle = !empty($londone_electrical['our-blog-subtitle']) ? esc_html($londone_electrical['our-blog-subtitle']) : '';
     $our_blog_title = !empty($londone_electrical['our-blog-title']) ? esc_html($londone_electrical['our-blog-title']) : '';
     $our_blog_title_span = !empty($londone_electrical['our-blog-title-span']) ? esc_html($londone_electrical['our-blog-title-span']) : '';
?>

<!-- Our Blog Section Start -->
<div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_blog_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_blog_title); ?> <span><?php echo esc_html($our_blog_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row">

                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );

                $blog_query = new WP_Query($args);
                $delay = 0.0;

                if ( $blog_query->have_posts() ) :
                    while ( $blog_query->have_posts() ) : $blog_query->the_post();
                        $post_title = get_the_title();
                        $post_link  = get_permalink();
                        $post_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // fallback later
                        if ( !$post_image ) {
                            $post_image = get_template_directory_uri() . '/images/default.jpg';
                        }
                ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <a href="<?php echo esc_url($post_link); ?>" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="<?php echo esc_url($post_image); ?>" alt="<?php echo esc_attr($post_title); ?>">
                                    </figure>
                                </a>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <div class="post-item-content">
                                    <h2><a href="<?php echo esc_url($post_link); ?>"><?php echo esc_html($post_title); ?></a></h2>
                                </div>
                                <div class="post-item-btn">
                                    <a href="<?php echo esc_url($post_link); ?>" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>
                <?php
                        $delay += 0.2;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->