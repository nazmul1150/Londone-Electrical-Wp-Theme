<?php
     global $londone_electrical;

     $company_values_image_1 = !empty($londone_electrical['company-values-image-1']['url']) ? esc_html($londone_electrical['company-values-image-1']['url']) : get_template_directory_uri() . '/images/company-values-image-1.jpg';
     $company_values_image_2 = !empty($londone_electrical['company-values-image-2']['url']) ? esc_html($londone_electrical['company-values-image-2']['url']) : get_template_directory_uri() . '/images/company-values-image-2.jpg';
     $company_values_image_3 = !empty($londone_electrical['company-values-image-3']['url']) ? esc_html($londone_electrical['company-values-image-3']['url']) : get_template_directory_uri() . '/images/contact-now-circle.png';
     $company_values_image_3_link = !empty($londone_electrical['company-values-image-3-link']) ? esc_html($londone_electrical['company-values-image-3-link']) : '';

     $company_values_content_subtitle = !empty($londone_electrical['company-values-content-subtitle']) ? esc_html($londone_electrical['company-values-content-subtitle']) : '';
     $company_values_content_title = !empty($londone_electrical['company-values-content-title']) ? esc_html($londone_electrical['company-values-content-title']) : '';
     $company_values_content_title_span = !empty($londone_electrical['company-values-content-title-span']) ? esc_html($londone_electrical['company-values-content-title-span']) : '';
     $company_values_content_title_desc = !empty($londone_electrical['company-values-content-title-desc']) ? esc_html($londone_electrical['company-values-content-title-desc']) : '';


?>
<!-- Comapny Values Section Start -->
<div class="company-values bg-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Comapny Values Images Start -->
                    <div class="company-values-images">
                        <!-- Comapny Values Image 1 Start -->
                        <div class="company-values-image-1">
                            <figure class="image-anime">
                                <img src="<?php echo esc_url($company_values_image_1); ?>" alt="">
                            </figure>
                            
                            <div class="contact-now-circle">
                                <a href="<?php echo esc_url($company_values_image_3_link); ?>"><img src="<?php echo esc_url($company_values_image_3); ?>" alt=""></a>
                            </div>
                        </div>
                        <!-- Comapny Values Image 1 End -->
                        
                        <!-- Comapny Values Image 2 Start -->
                        <div class="company-values-image-2">
                            <figure class="image-anime">
                                <img src="<?php echo esc_url($company_values_image_2); ?>" alt="">
                            </figure>
                        </div>
                        <!-- Comapny Values Image 2 End -->
                    </div>
                    <!-- Comapny Values Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Comapny Values Content Start -->
                    <div class="company-values-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($company_values_content_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($company_values_content_title); ?> <span>exc<?php echo esc_html($company_values_content_title_span); ?>ellence</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($company_values_content_title_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Company Values Counters Strat -->
                        <div class="company-values-counters">
                            <?php

                                if ( !empty($londone_electrical['company-values-counters']) && is_array($londone_electrical['company-values-counters']) ) :
                                    foreach ( $londone_electrical['company-values-counters'] as $item ) :
                                        $title  = !empty($item['title']) ? esc_html($item['title']) : '';
                                        $desc  = !empty($item['description']) ? esc_html($item['description']) : '';
                                ?>
                                    <!-- Values Counter Item Strat -->
                                    <div class="values-counter-item">
                                        <h2><span class="counter"><?php echo esc_html($title); ?></span>+</h2>
                                        <p><?php echo esc_html($desc); ?></p>
                                    </div>
                                    <!-- Values Counter Item End -->
                                <?php
                                    endforeach;
                                endif;
                                ?>

                        </div>
                        <!-- Company Values Counters End -->
                    </div>
                    <!-- Comapny Values Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Comapny Values Section End -->