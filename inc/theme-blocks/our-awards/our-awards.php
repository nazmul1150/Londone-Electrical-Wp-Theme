<?php
     global $londone_electrical;
     $our_awards_subtitle = !empty($londone_electrical['our-awards-subtitle']) ? esc_html($londone_electrical['our-awards-subtitle']) : '';
     $our_awards_title = !empty($londone_electrical['our-awards-title']) ? esc_html($londone_electrical['our-awards-title']) : '';
     $our_awards_title_span = !empty($londone_electrical['our-awards-title-span']) ? esc_html($londone_electrical['our-awards-title-span']) : '';
     $our_awards_desc = !empty($londone_electrical['our-awards-desc']) ? esc_html($londone_electrical['our-awards-desc']) : '';

     $our_service_bottom_link_text = !empty($londone_electrical['our-service-bottom-link-text']) ? esc_html($londone_electrical['our-service-bottom-link-text']) : '';
     $our_service_bottom_link_text_link = !empty($londone_electrical['our-service-bottom-link-text-link']) ? esc_html($londone_electrical['our-service-bottom-link-text-link']) : '';

?>
<!-- Our Awards Section Start -->
<div class="our-awards">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_awards_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_awards_title); ?> <span><?php echo esc_html($our_awards_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p><?php echo esc_html($our_awards_desc); ?></p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Awards List Start -->
                    <div class="our-awards-list wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Awards Item Start -->
                       <?php
                        global $londone_electrical;

                        if ( !empty($londone_electrical['our-awards-items']) && is_array($londone_electrical['our-awards-items']) ) :
                            foreach ( $londone_electrical['our-awards-items'] as $award ) :
                                $award_image = !empty($award['image']) ? esc_url($award['image']) : get_template_directory_uri() . '/images/default-award.png';
                                $award_title = !empty($award['title']) ? esc_html($award['title']) : '';
                                $award_desc  = !empty($award['description']) ? esc_html($award['description']) : '';
                        ?>
                            <div class="awards-item">
                                <div class="icon-box">
                                    <img src="<?php echo $award_image; ?>" alt="<?php echo esc_attr($award_title); ?>">
                                </div>
                                <div class="awards-item-content">
                                    <h3><?php echo $award_title; ?></h3>
                                    <p><?php echo $award_desc; ?></p>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                        <!-- Awards Item End -->
                    </div>
                    <!-- Our Awards List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Awards Section End -->