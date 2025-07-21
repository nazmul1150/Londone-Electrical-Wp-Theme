<?php
     global $londone_electrical;
     $our_approach_subtitle = !empty($londone_electrical['our-approach-subtitle']) ? esc_html($londone_electrical['our-approach-subtitle']) : '';
     $our_approach_title = !empty($londone_electrical['our-approach-title']) ? esc_html($londone_electrical['our-approach-title']) : '';
     $our_approach_title_span = !empty($londone_electrical['our-approach-title-span']) ? esc_html($londone_electrical['our-approach-title-span']) : '';
     
     $mission_vision_box_list1_image = !empty($londone_electrical['mission-vision-box-list1-image']['url']) ? esc_html($londone_electrical['mission-vision-box-list1-image']['url']) : get_template_directory_uri() . '/images/icon-our-mission.svg';
     $mission_vision_box_list1_title = !empty($londone_electrical['mission-vision-box-list1-title']) ? esc_html($londone_electrical['mission-vision-box-list1-title']) : '';
     $mission_vision_box_list1_text = !empty($londone_electrical['mission-vision-box-list1-text']) ? esc_html($londone_electrical['mission-vision-box-list1-text']) : '';

     $mission_vision_box_list2_image = !empty($londone_electrical['mission-vision-box-list2-image']['url']) ? esc_html($londone_electrical['mission-vision-box-list2-image']['url']) : get_template_directory_uri() . '/images/icon-our-vision.svg';
     $mission_vision_box_list2_title = !empty($londone_electrical['mission-vision-box-list2-title']) ? esc_html($londone_electrical['mission-vision-box-list2-title']) : '';
     $mission_vision_box_list2_text = !empty($londone_electrical['mission-vision-box-list2-text']) ? esc_html($londone_electrical['mission-vision-box-list2-text']) : '';
     
     $our_approach_img1 = !empty($londone_electrical['our-approach-img1']['url']) ? esc_html($londone_electrical['our-approach-img1']['url']) : get_template_directory_uri() . '/images/approach-image-1.jpg';
     $our_approach_img2 = !empty($londone_electrical['our-approach-img2']['url']) ? esc_html($londone_electrical['our-approach-img2']['url']) : get_template_directory_uri() . '/images/approach-image-2.jpg';
     $our_approach_img3 = !empty($londone_electrical['our-approach-img3']['url']) ? esc_html($londone_electrical['our-approach-img3']['url']) : get_template_directory_uri() . '/images/contact-now-circle.png';
     $our_approach_img3_link = !empty($londone_electrical['our-approach-img3-link']) ? esc_html($londone_electrical['our-approach-img3-link']) : '';
    
?>

<!-- Our Approach Section Start -->
<div class="our-approach bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($our_approach_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_approach_title); ?> <span><?php echo esc_html($our_approach_title_span); ?></span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Mission Vision Box List Start -->
                        <div class="mission-vision-box-list">
                            <!-- Mission Vision Box Start -->
                            <div class="mission-vision-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="mission-vision-header">
                                    <div class="icon-box">
                                        <img src="<?php echo esc_url($mission_vision_box_list1_image); ?>" alt="">
                                    </div>
                                    <div class="mission-vision-title">
                                        <h3><?php echo esc_html($mission_vision_box_list1_title); ?></h3>
                                    </div>
                                </div>
                                <div class="mission-vision-body">
                                    <p><?php echo esc_html($mission_vision_box_list1_text); ?></p>
                                </div>
                            </div>
                            <!-- Mission Vision Box End -->
                            
                            <!-- Mission Vision Box Start -->
                            <div class="mission-vision-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="mission-vision-header">
                                    <div class="icon-box">
                                        <img src="<?php echo esc_url($mission_vision_box_list2_image); ?>" alt="">
                                    </div>
                                    <div class="mission-vision-title">
                                        <h3><?php echo esc_html($mission_vision_box_list2_title); ?></h3>
                                    </div>
                                </div>
                                <div class="mission-vision-body">
                                    <p><?php echo esc_html($mission_vision_box_list2_text); ?></p>
                                </div>
                            </div>
                            <!-- Mission Vision Box End -->
                        </div>
                        <!-- Mission Vision Box List End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Images Start  -->
                    <div class="our-approach-images">
                        <!-- Approach Image 1 Start  -->
                        <div class="approach-img-1">
                            <figure class="image-anime reveal">
                                <img src="<?php echo esc_url($our_approach_img1); ?>" alt="">
                            </figure>
                        </div>
                        <!-- Approach Image 1 End  -->
                        
                        <!-- Approach Image 2 Start  -->
                        <div class="approach-img-2">
                            <figure class="image-anime">
                                <img src="<?php echo esc_url($our_approach_img2); ?>" alt="">
                            </figure>
                            
                            <div class="contact-now-circle">
                                <a href="<?php echo esc_url($our_approach_img3_link); ?>"><img src="<?php echo esc_url($our_approach_img3); ?>" alt=""></a>
                            </div>
                        </div>
                        <!-- Approach Image 2 End  -->
                    </div>
                    <!-- Our Approach Images End  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approch Section End -->