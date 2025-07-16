 <?php
     global $londone_electrical;

     $our_goals_subtitle = !empty($londone_electrical['our-goals-subtitle']) ? esc_html($londone_electrical['our-goals-subtitle']) : '';
     $our_goals_title = !empty($londone_electrical['our-goals-title']) ? esc_html($londone_electrical['our-goals-title']) : '';
     $our_goals_title_span = !empty($londone_electrical['our-goals-title-span']) ? esc_html($londone_electrical['our-goals-title-span']) : '';
     $our_goals_title_desc = !empty($londone_electrical['our-goals-title-desc']) ? esc_html($londone_electrical['our-goals-title-desc']) : '';

     $our_goals_button_title = !empty($londone_electrical['our-goals-button-title']) ? esc_html($londone_electrical['our-goals-button-title']) : 'Know More';
     $our_goals_button_link = !empty($londone_electrical['our-goals-button-link']) ? esc_html($londone_electrical['our-goals-button-link']) : '#';

     $our_goals_contact_img = !empty($londone_electrical['our-goals-contact-img']['url']) ? esc_html($londone_electrical['our-goals-contact-img']['url']) : get_template_directory_uri() . '/images/icon-phone-accent.svg';
     $our_goals_contact_title = !empty($londone_electrical['our-goals-contact-title']) ? esc_html($londone_electrical['our-goals-contact-title']) : '';
     $our_goals_contact_number = !empty($londone_electrical['our-goals-contact-number']) ? esc_html($londone_electrical['our-goals-contact-number']) : '';
     
     $our_goals_images1 = !empty($londone_electrical['our-goals-images1']['url']) ? esc_html($londone_electrical['our-goals-images1']['url']) : get_template_directory_uri() . '/images/our-goals-img-1.jpg';
     $our_goals_images2 = !empty($londone_electrical['our-goals-images2']['url']) ? esc_html($londone_electrical['our-goals-images2']['url']) : get_template_directory_uri() . '/images/our-goals-img-2.jpg';
     $our_goals_images3 = !empty($londone_electrical['our-goals-images3']['url']) ? esc_html($londone_electrical['our-goals-images3']['url']) : get_template_directory_uri() . '/images/our-goals-img-3.jpg';
     $our_goals_images4 = !empty($londone_electrical['our-goals-images4']['url']) ? esc_html($londone_electrical['our-goals-images4']['url']) : get_template_directory_uri() . '/images/our-goals-img-4.jpg';
     $our_goals_images5 = !empty($londone_electrical['our-goals-images5']['url']) ? esc_html($londone_electrical['our-goals-images5']['url']) : get_template_directory_uri() . '/images/contact-now-circle.png';
     $our_goals_images_link = !empty($londone_electrical['our-goals-images-link']) ? esc_html($londone_electrical['our-goals-images-link']) : '#';

?>

<!-- Our Goals Section Start -->
<div class="our-goals">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-goals-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($our_goals_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_goals_title); ?> <span><?php echo esc_html($our_goals_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_goals_title_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Goals Content Body Start -->
                        <div class="goals-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <?php

                            if ( !empty($londone_electrical['our-goals-content-list']) && is_array($londone_electrical['our-goals-content-list']) ) :
                                foreach ( $londone_electrical['our-goals-content-list'] as $goal ) :
                                    $goal_image = !empty($goal['image']) ? esc_url($goal['image']) : get_template_directory_uri() . '/images/icon-goals-item-1.svg';
                                    $goal_title = !empty($goal['title']) ? esc_html($goal['title']) : '';
                                    $goal_desc  = !empty($goal['description']) ? esc_html($goal['description']) : '';
                            ?>
                            <!-- Goals Item Start -->
                            <div class="goals-item">
                                <div class="icon-box">
                                    <img src="<?php echo $goal_image; ?>" alt="<?php echo esc_attr($goal_title); ?>">
                                </div>
                                <div class="goals-item-content">
                                    <h3><?php echo esc_html($goal_title); ?></h3>
                                    <p><?php echo esc_html($goal_desc); ?></p>
                                </div>
                            </div>
                            <!-- Goals Item End -->

                            <?php
                                endforeach;
                            endif;
                            ?>

                        </div>
                        <!-- Goals Content Body End -->

                        <!-- Goals Content Footer Start -->
                        <div class="goals-content-footer wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Goals Content Button Start -->
                            <div class="goals-content-btn">
                                <a href="<?php echo esc_url($our_goals_button_link); ?>" class="btn-default"><?php echo esc_html($our_goals_button_title); ?></a>
                            </div>
                            <!-- Goals Content Button End -->

                            <!-- Contact Now Box Start -->
                            <div class="contact-now-box">
                                <div class="icon-box">
                                    <img src="<?php echo $our_goals_contact_img; ?>" alt="<?php echo esc_html($our_goals_contact_title); ?>">
                                </div>
                                <div class="contact-now-box-content">
                                    <span><?php echo esc_html($our_goals_contact_title); ?></span>
                                    <p><a href="tel:<?php echo esc_html($our_goals_contact_number); ?>"><?php echo esc_html($our_goals_contact_number); ?></a></p>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                        </div>
                        <!-- Goals Content Footer End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Our Goals Images Start -->
                    <div class="our-goals-images">
                        <!-- Goals Image Box Start -->
                        <div class="goals-image-box">
                            <!-- Goals Img Start -->
                            <div class="goals-img-1">
                                <figure class="image-anime reveal">
                                    <img src="<?php echo $our_goals_images1; ?>" alt="">
                                </figure>
                            </div>
                            <!-- Goals Img End -->
                            
                            <!-- Goals Img Start -->
                            <div class="goals-img-2">
                                <figure class="image-anime reveal">
                                    <img src="<?php echo $our_goals_images2; ?>" alt="">
                                </figure>
                            </div>
                            <!-- Goals Img End -->
                        </div>
                        <!-- Goals Image Box End -->

                        <!-- Goals Image Box Start -->
                        <div class="goals-image-box">
                            <!-- Goals Img Start -->
                            <div class="goals-img-3">
                                <figure class="image-anime reveal">
                                    <img src="<?php echo $our_goals_images3; ?>" alt="">
                                </figure>
                            </div>
                            <!-- Goals Img End -->
                            
                            <!-- Goals Img Start -->
                            <div class="goals-img-4">
                                <figure class="image-anime reveal">
                                    <img src="<?php echo $our_goals_images4; ?>" alt="">
                                </figure>
                            </div>
                            <!-- Goals Img End -->
                        </div>
                        <!-- Goals Image Box End -->

                        <!-- Contact Nwo Circle Start -->
                        <div class="contact-now-circle">
                            <a href="<?php echo esc_url($our_goals_images_link); ?>"><img src="<?php echo $our_goals_images5; ?>" alt=""></a>
                        </div>
                        <!-- Contact Nwo Circle End -->
                    </div>
                    <!-- Our Goals Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Goals Section End -->