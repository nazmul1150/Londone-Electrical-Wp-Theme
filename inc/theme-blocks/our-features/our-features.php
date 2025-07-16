<?php
    global $londone_electrical;
    $our_features_subtitle = !empty($londone_electrical['our-features-subtitle']) ? esc_html($londone_electrical['our-features-subtitle']) : '';
    $our_features_title = !empty($londone_electrical['our-features-title']) ? esc_html($londone_electrical['our-features-title']) : '';
    $our_features_title_span = !empty($londone_electrical['our-features-title-span']) ? esc_html($londone_electrical['our-features-title-span']) : '';

    $our_features_img = !empty($londone_electrical['our-features-img']['url']) ? esc_url($londone_electrical['our-features-img']['url']) : get_template_directory_uri() . '/images/intro-bg-image.jpg';
    $our_features_img_video_link = !empty($londone_electrical['our-features-img-video-link']) ? esc_html($londone_electrical['our-features-img-video-link']) : '#';


    //

?>
<!-- Our Features Section Start -->
<div class="our-features bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_features_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_features_title); ?> <span><?php echo esc_html($our_features_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <div class="intro-bg-image">
                            <a href="<?php echo esc_url($our_features_img_video_link); ?>" class="popup-video" data-cursor-text="Play">
                                <figure class="image-anime">
                                    <img src="<?php echo esc_url($our_features_img); ?>" alt="">
                                </figure>
                            </a>                            
                        </div>
                        <!-- Video Play Button Start -->
                        <div class="video-play-button btn-effect">
                            <a href="<?php echo esc_url($our_features_img_video_link); ?>" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video Box End -->

                    <!-- Our Features List Start -->
                    <div class="our-features-list">
                        <?php

                            if ( !empty($londone_electrical['our-features-list-items']) && is_array($londone_electrical['our-features-list-items']) ) :
                                $delay = 0;
                                foreach ( $londone_electrical['our-features-list-items'] as $feature ) :
                                    $feature_image = !empty($feature['image']) ? esc_url($feature['image']) : get_template_directory_uri() . '/images/default-icon.svg';
                                    $feature_title = !empty($feature['title']) ? esc_html($feature['title']) : '';
                                    $feature_desc  = !empty($feature['description']) ? esc_html($feature['description']) : '';
                            ?>
                                <!-- Features Item Start -->
                                <div class="features-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                                    <div class="icon-box">
                                        <img src="<?php echo $feature_image; ?>" alt="<?php echo esc_attr($feature_title); ?>">
                                    </div>
                                    <div class="features-item-content">
                                        <h3><?php echo $feature_title; ?></h3>
                                        <p><?php echo $feature_desc; ?></p>
                                    </div>
                                </div>
                                <!-- Features Item End -->
                            <?php
                                    $delay += 0.2;
                                endforeach;
                            endif;
                            ?>
                    </div>
                    <!-- Our Features List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Features Section End -->