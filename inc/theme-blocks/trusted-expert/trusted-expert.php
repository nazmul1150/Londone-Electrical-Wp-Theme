<?php

    global $londone_electrical;

    $trusted_expert_images_image = !empty($londone_electrical['trusted-expert-images-image']['url']) ? esc_html($londone_electrical['trusted-expert-images-image']['url']) : get_template_directory_uri() . '/images/trusted-expert-image.jpg';
    $exprience_box_title = !empty($londone_electrical['exprience-box-title']) ? esc_html($londone_electrical['exprience-box-title']) : '';
    $exprience_box_text = !empty($londone_electrical['exprience-box-text']) ? esc_html($londone_electrical['exprience-box-text']) : '';
    
    $trusted_expert_project_complete_list1_image = !empty($londone_electrical['trusted-expert-project-complete-list1-image']['url']) ? esc_html($londone_electrical['trusted-expert-project-complete-list1-image']['url']) : get_template_directory_uri() . '/images/icon-project-complete-1.svg';
    $trusted_expert_project_complete_list1_count = !empty($londone_electrical['trusted-expert-project-complete-list1-count']) ? esc_html($londone_electrical['trusted-expert-project-complete-list1-count']) : '';
    $trusted_expert_project_complete_list1_text = !empty($londone_electrical['trusted-expert-project-complete-list1-text']) ? esc_html($londone_electrical['trusted-expert-project-complete-list1-text']) : '';
    
    $trusted_expert_project_complete_list2_image = !empty($londone_electrical['trusted-expert-project-complete-list2-image']['url']) ? esc_html($londone_electrical['trusted-expert-project-complete-list2-image']['url']) : get_template_directory_uri() . '/images/icon-project-complete-2.svg';
    $trusted_expert_project_complete_list2_count = !empty($londone_electrical['trusted-expert-project-complete-list2-count']) ? esc_html($londone_electrical['trusted-expert-project-complete-list2-count']) : '';
    $trusted_expert_project_complete_list2_text = !empty($londone_electrical['trusted-expert-project-complete-list2-text']) ? esc_html($londone_electrical['trusted-expert-project-complete-list2-text']) : '';
    
    $trusted_expert_content_subtitle = !empty($londone_electrical['trusted-expert-content-subtitle']) ? esc_html($londone_electrical['trusted-expert-content-subtitle']) : '';
    $trusted_expert_content_title = !empty($londone_electrical['trusted-expert-content-title']) ? esc_html($londone_electrical['trusted-expert-content-title']) : '';
    $trusted_expert_content_title_span = !empty($londone_electrical['trusted-expert-content-title-span']) ? esc_html($londone_electrical['trusted-expert-content-title-span']) : '';
    $trusted_expert_content_title_desc = !empty($londone_electrical['trusted-expert-content-title-desc']) ? esc_html($londone_electrical['trusted-expert-content-title-desc']) : '';
    
    $trusted_expert_content_item1_img = !empty($londone_electrical['trusted-expert-content-item1-img']['url']) ? esc_html($londone_electrical['trusted-expert-content-item1-img']['url']) : get_template_directory_uri() . '/images/icon-trusted-expert-body-1.svg';
    $trusted_expert_content_item1_title = !empty($londone_electrical['trusted-expert-content-item1-title']) ? esc_html($londone_electrical['trusted-expert-content-item1-title']) : '';
    $trusted_expert_content_item2_img = !empty($londone_electrical['trusted-expert-content-item2-img']['url']) ? esc_html($londone_electrical['trusted-expert-content-item2-img']['url']) : get_template_directory_uri() . '/images/icon-trusted-expert-body-2.svg';
    $trusted_expert_content_item2_title = !empty($londone_electrical['trusted-expert-content-item2-title']) ? esc_html($londone_electrical['trusted-expert-content-item2-title']) : '';
    
    $trusted_expert_content_button_text = !empty($londone_electrical['trusted-expert-content-button-text']) ? esc_html($londone_electrical['trusted-expert-content-button-text']) : '';
    $trusted_expert_content_button_link = !empty($londone_electrical['trusted-expert-content-button-link']) ? esc_html($londone_electrical['trusted-expert-content-button-link']) : '';
    
    $trusted_expert_content_contact_img = !empty($londone_electrical['trusted-expert-content-contact-img']['url']) ? esc_html($londone_electrical['trusted-expert-content-contact-img']['url']) : get_template_directory_uri() . '/images/icon-phone-accent.svg';
    $trusted_expert_content_now_box_title = !empty($londone_electrical['trusted-expert-content-now-box-title']) ? esc_html($londone_electrical['trusted-expert-content-now-box-title']) : '';
    $trusted_expert_content_now_box_number = !empty($londone_electrical['trusted-expert-content-now-box-number']) ? esc_html($londone_electrical['trusted-expert-content-now-box-number']) : '';
    
?>
<!-- Trusted Expert Section Start -->
<div class="trusted-expert">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Trusted Expert Content Images Start -->
                    <div class="trusted-expert-images">
                        <div class="trusted-expert-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo esc_url($trusted_expert_images_image); ?>" alt="">
                            </figure>
                        </div>

                        <!-- Exprience Box Start -->
                        <div class="exprience-box">
                            <h3><?php echo esc_html($exprience_box_title); ?></h3>
                            <p><?php echo esc_html($exprience_box_text); ?></p>
                        </div>
                        <!-- Exprience Box End -->

                        <!-- Project Complete List Start -->
                        <div class="project-complete-list">
                            <!-- Project Complete Item Start -->
                            <div class="project-complete-item">
                                <img src="<?php echo esc_url($trusted_expert_project_complete_list1_image); ?>" alt="">
                                <h2><span class="counter"><?php echo esc_html($trusted_expert_project_complete_list1_count); ?></span>+</h2>
                                <p><?php echo esc_html($trusted_expert_project_complete_list1_text); ?></p>
                            </div>
                            <!-- Project Complete Item End -->
                            
                            <!-- Project Complete Item Start -->
                            <div class="project-complete-item">
                                <img src="<?php echo esc_url($trusted_expert_project_complete_list2_image); ?>" alt="">
                                <h2><span class="counter"><?php echo esc_html($trusted_expert_project_complete_list2_count); ?></span>+</h2>
                                <p><?php echo esc_html($trusted_expert_project_complete_list2_text); ?></p>
                            </div>
                            <!-- Project Complete Item End -->
                        </div>
                        <!-- Project Complete List End -->
                    </div>
                    <!-- Trusted Expert Content Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Trusted Expert Content Start -->
                    <div class="trusted-expert-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($trusted_expert_content_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($trusted_expert_content_title); ?> <span><?php echo esc_html($trusted_expert_content_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($trusted_expert_content_title_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Trusted Expert List Start -->
                        <div class="trusted-expert-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <?php

                                if ( !empty($londone_electrical['trusted-expert-list-items']) && is_array($londone_electrical['trusted-expert-list-items']) ) :
                                    foreach ( $londone_electrical['trusted-expert-list-items'] as $item ) :
                                        $desc  = !empty($item['description']) ? esc_html($item['description']) : '';
                                ?>
                                <li><?php echo esc_html($desc); ?></li>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <!-- Trusted Expert List End -->

                        <!-- Trusted Expert Body Start -->
                        <div class="trusted-expert-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Trusted Expert Body Item Start -->
                            <div class="trusted-expert-item">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($trusted_expert_content_item1_img); ?>" alt="">
                                </div>
                                <div class="trusted-expert-title">
                                    <h3><?php echo esc_html($trusted_expert_content_item1_title); ?></h3>
                                </div>
                            </div>
                            <!-- Trusted Expert Body Item End -->
                            
                            <!-- Trusted Expert Body Item Start -->
                            <div class="trusted-expert-item">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($trusted_expert_content_item2_img); ?>" alt="">
                                </div>
                                <div class="trusted-expert-title">
                                    <h3><?php echo esc_html($trusted_expert_content_item2_title); ?></h3>
                                </div>
                            </div>
                            <!-- Trusted Expert Body Item End -->
                        </div>
                        <!-- Trusted Expert Body End -->
                        
                        <!-- Trusted Expert Footer Start -->
                        <div class="trusted-expert-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- Goals Content Button Start -->
                            <div class="trusted-expert-btn">
                                <a href="<?php echo esc_url($trusted_expert_content_button_link); ?>" class="btn-default"><?php echo esc_html($trusted_expert_content_button_text); ?></a>
                            </div>
                            <!-- Goals Content Button End -->
                            
                            <!-- Contact Now Box Start -->
                            <div class="contact-now-box">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($trusted_expert_content_contact_img); ?>" alt="">
                                </div>
                                <div class="contact-now-box-content">
                                    <span><?php echo esc_html($trusted_expert_content_now_box_title); ?></span>
                                    <p><a href="tel:<?php echo esc_html($trusted_expert_content_now_box_number); ?>"><?php echo esc_html($trusted_expert_content_now_box_number); ?></a></p>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                        </div>
                        <!-- Trusted Expert Footer End -->
                    </div>
                    <!-- Trusted Expert Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Expert Section End -->