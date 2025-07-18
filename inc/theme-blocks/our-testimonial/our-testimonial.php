 <?php
     global $londone_electrical;

     $our_testimonial_subtitle = !empty($londone_electrical['our-testimonial-subtitle']) ? esc_html($londone_electrical['our-testimonial-subtitle']) : '';
     $our_testimonial_title = !empty($londone_electrical['our-testimonial-title']) ? esc_html($londone_electrical['our-testimonial-title']) : '';
     $our_testimonial_title_span = !empty($londone_electrical['our-testimonial-title-span']) ? esc_html($londone_electrical['our-testimonial-title-span']) : '';
     $our_testimonial_desc = !empty($londone_electrical['our-testimonial-desc']) ? esc_html($londone_electrical['our-testimonial-desc']) : '';
     
     $our_testimonial_btn_text = !empty($londone_electrical['our-testimonial-btn-text']) ? esc_html($londone_electrical['our-testimonial-btn-text']) : 'Button Text';
     $our_testimonial_btn_link = !empty($londone_electrical['our-testimonial-btn-link']) ? esc_html($londone_electrical['our-testimonial-btn-link']) : '#';
     
     $companies_text = !empty($londone_electrical['companies-text']) ? esc_html($londone_electrical['companies-text']) : '';
     $companies_text_count = !empty($londone_electrical['companies-text-count']) ? esc_html($londone_electrical['companies-text-count']) : '';
     $companies_text_span = !empty($londone_electrical['companies-text-span']) ? esc_html($londone_electrical['companies-text-span']) : '';

?>

<!-- Our Testimonial Section Start -->
<div class="our-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($our_testimonial_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_testimonial_title); ?> <span><?php echo esc_html($our_testimonial_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_testimonial_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Content Button Start -->
                        <div class="testimonial-content-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="<?php echo esc_url($our_testimonial_btn_link); ?>" class="btn-default"><?php echo esc_html($our_testimonial_btn_text); ?></a>
                        </div>
                        <!-- Testimonial Content Button End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">

                            <?php

                            if ( !empty($londone_electrical['our-testimonial-items']) && is_array($londone_electrical['our-testimonial-items']) ) :
                                foreach ( $londone_electrical['our-testimonial-items'] as $testimonial ) :
                                    $testimonial_image = !empty($testimonial['image']) ? esc_url($testimonial['image']) : get_template_directory_uri() . '/images/author-1.jpg';
                                    $testimonial_title = !empty($testimonial['title']) ? esc_html($testimonial['title']) : '';
                                    $testimonial_desc  = !empty($testimonial['description']) ? esc_html($testimonial['description']) : '';
                            ?>

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <img src="<?php echo get_template_directory_uri();?>/images/testimonial-quote.svg" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p><?php echo esc_html($testimonial_desc); ?></p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_html($testimonial_title); ?>">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3><?php echo esc_html($testimonial_title); ?></h3>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                            <?php
                                endforeach;
                            endif;
                            ?>

                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            <?php
             if($londone_electrical['companies-image-items']){
            ?>
             <div class="col-lg-12">
                 <!-- Testimonial Company Slider Start -->
                 <div class="testimonial-company-slider">
                     <div class="testimonial-company-slider-text">
                         <p><?php echo esc_html($companies_text); ?> <span class="counter"><?php echo esc_html($companies_text_count); ?></span><?php echo esc_html($companies_text_span); ?></p>
                     </div>
                     <div class="swiper">
                         <div class="swiper-wrapper">
                             <?php

                             if ( !empty($londone_electrical['companies-image-items']) && is_array($londone_electrical['companies-image-items']) ) :
                                 foreach ( $londone_electrical['companies-image-items'] as $companies ) :
                                     $companies_image = !empty($companies['image']) ? esc_url($companies['image']) : get_template_directory_uri() . '/images/company-logo-3.svg';
                             ?>
                             <!-- Company Logo Start -->
                             <div class="swiper-slide">
                                 <div class="company-logo">
                                     <img src="<?php echo $companies_image; ?>" alt="">
                                 </div>
                             </div>
                             <!-- Company Logo End -->
                             <?php
                                 endforeach;
                             endif;
                             ?>
                         </div>
                     </div>
                 </div>
                 <!-- Company Slider End -->
             </div>
            <?php
             }
            ?>

            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->