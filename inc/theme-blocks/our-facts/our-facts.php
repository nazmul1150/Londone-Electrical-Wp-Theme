 <?php
     global $londone_electrical;

     $our_facts_subtitle = !empty($londone_electrical['our-facts-subtitle']) ? esc_html($londone_electrical['our-facts-subtitle']) : '';
     $our_facts_title = !empty($londone_electrical['our-facts-title']) ? esc_html($londone_electrical['our-facts-title']) : '';
     $our_facts_title_span = !empty($londone_electrical['our-facts-title-span']) ? esc_html($londone_electrical['our-facts-title-span']) : '';
     $our_facts_title_desc = !empty($londone_electrical['our-facts-title-desc']) ? esc_html($londone_electrical['our-facts-title-desc']) : '';

     $our_facts_image1 = !empty($londone_electrical['our-facts-image1']['url']) ? esc_html($londone_electrical['our-facts-image1']['url']) : get_template_directory_uri() . '/images/our-goals-img-4.jpg';
     $our_facts_image2 = !empty($londone_electrical['our-facts-image2']['url']) ? esc_html($londone_electrical['our-facts-image2']['url']) : get_template_directory_uri() . '/images/contact-now-circle.png';
     $our_facts_image2_link = !empty($londone_electrical['our-facts-image2-link']) ? esc_html($londone_electrical['our-facts-image2-link']) : '#';

?>

<!-- Our Facts Section Start -->
<div class="our-facts bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Facts Box Start -->
                    <div class="our-facts-box">
                        <!-- Our Facts Content Start -->
                        <div class="our-facts-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp"><?php echo esc_html($our_facts_subtitle); ?></h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_facts_title); ?> <span><?php echo esc_html($our_facts_title_span); ?></span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($our_facts_title_desc); ?></p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Our Facts List Start -->
                            <div class="our-facts-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <?php

                                    if ( !empty($londone_electrical['our-facts-lists']) && is_array($londone_electrical['our-facts-lists']) ) :
                                        foreach ( $londone_electrical['our-facts-lists'] as $goal ) :
                                            $goal_desc  = !empty($goal['description']) ? esc_html($goal['description']) : '';
                                    ?>
                                    <li><?php echo esc_html($goal_desc); ?></li>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                            </div>
                            <!-- Our Facts List End -->
                        </div>
                        <!-- Our Facts Content End -->
                         
                        <!-- Our Facts Image Start -->
                        <div class="our-facts-image">
                            <figure>
                                <img src="<?php echo esc_url($our_facts_image1); ?>" alt="">
                            </figure>

                            <!-- Contact Nwo Circle Start -->
                            <div class="contact-now-circle">
                                <a href="<?php echo esc_url($our_facts_image2_link); ?>"><img src="<?php echo esc_url($our_facts_image2); ?>" alt=""></a>
                            </div>
                            <!-- Contact Nwo Circle End -->
                        </div>
                        <!-- Our Facts Image End -->
                    </div>
                    <!-- Our Facts Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Facts Counter Box Start -->
                    <div class="facts-counter-box">
                        <?php

                        if ( !empty($londone_electrical['facts-counter-box']) && is_array($londone_electrical['facts-counter-box']) ) :
                            foreach ( $londone_electrical['facts-counter-box'] as $fact ) :
                                $fact_image = !empty($fact['image']) ? esc_url($fact['image']) : get_template_directory_uri() . '/images/icon-facts-counter-1.svg';
                                $fact_title = !empty($fact['title']) ? esc_html($fact['title']) : '';
                                $fact_desc  = !empty($fact['description']) ? esc_html($fact['description']) : '';
                        ?>
                        <!-- Facts Counter Item Start -->
                        <div class="facts-counter-item">
                            <img src="<?php echo esc_url($fact_image); ?>" alt="<?php echo esc_attr($fact_title); ?>">
                            <h2><span class="counter"><?php echo esc_html($fact_title); ?></span>+</h2>
                            <p><?php echo esc_html($fact_desc); ?></p>
                        </div>
                        <!-- Facts Counter Item End -->
                         <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <!-- Facts Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Facts Section End -->