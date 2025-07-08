<!-- About Us Section Start -->
 <?php
     global $londone_electrical;
     $about_experience_box_img = !empty($londone_electrical['about-experience-box-img']['url']) ? esc_url($londone_electrical['about-experience-box-img']['url']) : get_template_directory_uri() . '/images/icon-about-experience.svg';
     $about_experience_box_title_count = !empty($londone_electrical['about-experience-box-title-count']) ? esc_html($londone_electrical['about-experience-box-title-count']) : '';
     $about_experience_box_title = !empty($londone_electrical['about-experience-box-title']) ? esc_html($londone_electrical['about-experience-box-title']) : '';
     $about_experience_box_desc = !empty($londone_electrical['about-experience-box-desc']) ? esc_html($londone_electrical['about-experience-box-desc']) : '';

     //video
     $about_video_image_bgimg = !empty($londone_electrical['about-video-image-bgimg']['url']) ? esc_url($londone_electrical['about-video-image-bgimg']['url']) : get_template_directory_uri() . '/images/about-image-1.jpg';
     $about_video_image_video_link = !empty($londone_electrical['about-video-image-video_link']) ? esc_html($londone_electrical['about-video-image-video_link']) : '';
     
     //img
     $about_image_img = !empty($londone_electrical['about-image-img']['url']) ? esc_url($londone_electrical['about-image-img']['url']) : get_template_directory_uri() . '/images/about-image-2.jpg';
     
     //About Us Content
     $about_us_content_subtitle= !empty($londone_electrical['about-us-content-subtitle']) ? esc_html($londone_electrical['about-us-content-subtitle']) : '';
     $about_us_content_title = !empty($londone_electrical['about-us-content-title']) ? esc_html($londone_electrical['about-us-content-title']) : '';
     $about_us_content_title_span= !empty($londone_electrical['about-us-content-title-span']) ? esc_html($londone_electrical['about-us-content-title-span']) : '';
     $about_us_content_desc = !empty($londone_electrical['about-us-content-desc']) ? esc_html($londone_electrical['about-us-content-desc']) : '';

     $about_us_content_icon1 = !empty($londone_electrical['about-us-content-icon1']['url']) ? esc_url($londone_electrical['about-us-content-icon1']['url']) : get_template_directory_uri() . '/images/icon-about-service-1.svg';
     $about_us_content_icon1_title = !empty($londone_electrical['about-us-content-icon1-title']) ? esc_html($londone_electrical['about-us-content-icon1-title']) : '';
     $about_us_content_icon1_desc = !empty($londone_electrical['about-us-content-icon1-desc']) ? esc_html($londone_electrical['about-us-content-icon1-desc']) : '';

     $about_us_content_icon2 = !empty($londone_electrical['about-us-content-icon2']['url']) ? esc_url($londone_electrical['about-us-content-icon2']['url']) : get_template_directory_uri() . '/images/icon-about-service-2.svg';
     $about_us_content_icon2_title = !empty($londone_electrical['about-us-content-icon2-title']) ? esc_html($londone_electrical['about-us-content-icon2-title']) : '';
     $about_us_content_icon2_desc = !empty($londone_electrical['about-us-content-icon2-desc']) ? esc_html($londone_electrical['about-us-content-icon2-desc']) : '';

     $about_us_content_action_btn_text = !empty($londone_electrical['about-us-content-action-btn-text']) ? esc_html($londone_electrical['about-us-content-action-btn-text']) : '';
     $about_us_content_action_btn_link = !empty($londone_electrical['about-us-content-action-btn-link']) ? esc_html($londone_electrical['about-us-content-action-btn-link']) : '';

    // echo"<pre>";
    // print_r($slider_options);
    // echo "</pre>";
?>
<div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Images Start -->
                    <div class="about-images">
                        <!-- About Experience Box Start -->
                        <div class="about-experience-box wow fadeInUp">
                            <div class="icon-box">
                                <img src="<?php echo $about_experience_box_img; ?>" alt="">
                            </div>
                            <div class="about-experience-content">
                                <h3><span class="counter"><?php echo esc_html($about_experience_box_title_count); ?></span><?php echo esc_html($about_experience_box_title); ?></h3>
                                <p><?php echo esc_html($about_experience_box_desc); ?></p>
                            </div>
                        </div>
                        <!-- About Experience Box End -->

                        <!-- About Video Image Start -->
                        <div class="about-video-image wow fadeInUp" data-wow-delay="0.2s">
                            <figure class="image-anime">
                                <img src="<?php echo $about_video_image_bgimg; ?>" alt="">
                            </figure>

                            <!-- Video Play Button Start -->
                            <div class="video-play-button btn-effect">
                                <a href="<?php echo $about_video_image_video_link; ?>" class="popup-video" data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- About Video Image End -->

                        <!-- About Image Start -->
                        <div class="about-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo $about_image_img; ?>" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->
                    </div>
                    <!-- About Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($about_us_content_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($about_us_content_title); ?> <span><?php echo esc_html($about_us_content_title_span); ?></span></h2>
                            <P class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($about_us_content_desc); ?></P>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Body Start -->
                        <div class="about-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- About Service Item Start -->
                            <div class="about-service-item">
                                <div class="icon-box">
                                    <img src="<?php echo $about_us_content_icon1; ?>" alt="">
                                </div>
                                <div class="about-service-item-content">
                                    <h3><?php echo esc_html($about_us_content_icon1_title); ?></h3>
                                    <p><?php echo esc_html($about_us_content_icon1_desc); ?></p>
                                </div>
                            </div>
                            <!-- About Service Item End -->

                            <!-- About Service Item Start -->
                            <div class="about-service-item">
                                <div class="icon-box">
                                    <img src="<?php echo $about_us_content_icon2; ?>" alt="">
                                </div>
                                <div class="about-service-item-content">
                                    <h3><?php echo esc_html($about_us_content_icon2_title); ?></h3>
                                    <p><?php echo esc_html($about_us_content_icon2_desc); ?></p>
                                </div>
                            </div>
                            <!-- About Service Item End -->                            
                        </div>
                        <!-- About Content Body End -->

                        <!-- About Content Button Start -->
                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.6s">
                            <?php if (! empty($about_us_content_action_btn_link)){ ?>
                                <a href="<?php echo esc_url($about_us_content_action_btn_link); ?>" class="btn-default"><?php echo esc_html($about_us_content_action_btn_text); ?></a>
                            <?php } ?>
                        </div>
                        <!-- About Content Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->