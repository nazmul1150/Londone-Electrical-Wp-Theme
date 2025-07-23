<?php
     global $londone_electrical;

     $why_choose_us_img = !empty($londone_electrical['why-choose-us-img']['url']) ? esc_html($londone_electrical['why-choose-us-img']['url']) : get_template_directory_uri() . '/images/why-choose-image.jpg';
     
     $why_choose_us_subtitle = !empty($londone_electrical['why-choose-us-subtitle']) ? esc_html($londone_electrical['why-choose-us-subtitle']) : '';
     $why_choose_us_title = !empty($londone_electrical['why-choose-us-title']) ? esc_html($londone_electrical['why-choose-us-title']) : '';
     $why_choose_us_title_span = !empty($londone_electrical['why-choose-us-title-span']) ? esc_html($londone_electrical['why-choose-us-title-span']) : '';
     $why_choose_us_desc = !empty($londone_electrical['why-choose-us-desc']) ? esc_html($londone_electrical['why-choose-us-desc']) : '';
     
     $why_choose_us_btn_text = !empty($londone_electrical['why-choose-us-btn-text']) ? esc_html($londone_electrical['why-choose-us-btn-text']) : '';
     $why_choose_us_btn_link = !empty($londone_electrical['why-choose-us-btn-link']) ? esc_html($londone_electrical['why-choose-us-btn-link']) : '';
     
     
     $why_choose_item_list1_image = !empty($londone_electrical['why-choose-item-list1-image']['url']) ? esc_html($londone_electrical['why-choose-item-list1-image']['url']) : get_template_directory_uri() . '/images/icon-why-choose-list-1.svg';
     $why_choose_item_list1_title = !empty($londone_electrical['why-choose-item-list1-title']) ? esc_html($londone_electrical['why-choose-item-list1-title']) : '';
     $why_choose_item_list1_text = !empty($londone_electrical['why-choose-item-list1-text']) ? esc_html($londone_electrical['why-choose-item-list1-text']) : '';
     
     $why_choose_item_list2_image = !empty($londone_electrical['why-choose-item-list2-image']['url']) ? esc_html($londone_electrical['why-choose-item-list2-image']['url']) : get_template_directory_uri() . '/images/icon-why-choose-list-2.svg';
     $why_choose_item_list2_title = !empty($londone_electrical['why-choose-item-list2-title']) ? esc_html($londone_electrical['why-choose-item-list2-title']) : '';
     $why_choose_item_list2_text = !empty($londone_electrical['why-choose-item-list2-text']) ? esc_html($londone_electrical['why-choose-item-list2-text']) : '';
     
     $why_choose_item_list3_image = !empty($londone_electrical['why-choose-item-list3-image']['url']) ? esc_html($londone_electrical['why-choose-item-list3-image']['url']) : get_template_directory_uri() . '/images/icon-why-choose-list-3.svg';
     $why_choose_item_list3_title = !empty($londone_electrical['why-choose-item-list3-title']) ? esc_html($londone_electrical['why-choose-item-list3-title']) : '';
     $why_choose_item_list3_text = !empty($londone_electrical['why-choose-item-list3-text']) ? esc_html($londone_electrical['why-choose-item-list3-text']) : '';


?>

<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure class="image-anime reveal">
                            <img src="<?php echo esc_url($why_choose_us_img); ?>" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($why_choose_us_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($why_choose_us_title); ?> <span><?php echo esc_html($why_choose_us_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($why_choose_us_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Body Start -->
                        <div class="why-choose-body wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <?php

                                if ( !empty($londone_electrical['why-choose-body-items']) && is_array($londone_electrical['why-choose-body-items']) ) :
                                    foreach ( $londone_electrical['why-choose-body-items'] as $item ) :
                                        $desc  = !empty($item['description']) ? esc_html($item['description']) : '';
                                ?>
                                <li><?php echo esc_html($desc); ?></li>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <!-- Why Choose Body End -->

                        <!-- Why Choose Button Start -->
                        <div class="why-choose-button wow fadeInUp" data-wow-delay="0.6s">
                            <a href="<?php echo esc_url($why_choose_us_btn_link); ?>" class="btn-default"><?php echo esc_html($why_choose_us_btn_text); ?></a>
                        </div>
                        <!-- Why Choose Button End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($why_choose_item_list1_image); ?>" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><?php echo esc_html($why_choose_item_list1_title); ?></h3>
                                <p><?php echo esc_html($why_choose_item_list1_text); ?></p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                        
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item active">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($why_choose_item_list2_image); ?>" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><?php echo esc_html($why_choose_item_list2_title); ?></h3>
                                <p><?php echo esc_html($why_choose_item_list2_text); ?></p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                        
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($why_choose_item_list3_image); ?>" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><?php echo esc_html($why_choose_item_list3_title); ?></h3>
                                <p><?php echo esc_html($why_choose_item_list3_text); ?></p>
                            </div>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->