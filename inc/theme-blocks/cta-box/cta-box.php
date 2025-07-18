 <?php
     global $londone_electrical;

     $cta_box_subtitle = !empty($londone_electrical['cta-box-subtitle']) ? esc_html($londone_electrical['cta-box-subtitle']) : '';
     $cta_box_title = !empty($londone_electrical['cta-box-title']) ? esc_html($londone_electrical['cta-box-title']) : '';
     $cta_box_title_span = !empty($londone_electrical['cta-box-title-span']) ? esc_html($londone_electrical['cta-box-title-span']) : '';
     $cta_box_desc = !empty($londone_electrical['cta-box-desc']) ? esc_html($londone_electrical['cta-box-desc']) : '';

     $cta_box_contact_btn_text = !empty($londone_electrical['cta-box-contact-btn-text']) ? esc_html($londone_electrical['cta-box-contact-btn-text']) : 'Contact Us';
     $cta_box_contact_btn_link = !empty($londone_electrical['cta-box-contact-btn-link']) ? esc_html($londone_electrical['cta-box-contact-btn-link']) : '#';
     
     $cta_box_contact_info_icon = !empty($londone_electrical['cta-box-contact-info-icon']['url']) ? esc_html($londone_electrical['cta-box-contact-info-icon']['url']) : get_template_directory_uri() . '/images/icon-phone.svg';
     $cta_box_contact_info_text = !empty($londone_electrical['cta-box-contact-info-text']) ? esc_html($londone_electrical['cta-box-contact-info-text']) : '';
     $cta_box_contact_info_ph_number = !empty($londone_electrical['cta-box-contact-info-ph-number']) ? esc_html($londone_electrical['cta-box-contact-info-ph-number']) : '';
     $cta_box_image = !empty($londone_electrical['cta-box-image']['url']) ? esc_html($londone_electrical['cta-box-image']['url']) : get_template_directory_uri() . '/images/cta-box-img.png';

?>

<!-- CTA Box Section Start -->
<div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <!-- CTA Box Content Start -->
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($cta_box_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($cta_box_title); ?> <span><?php echo esc_html($cta_box_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($cta_box_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Box Body Start -->
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- CTA Box Button Start -->
                            <div class="cta-box-btn">
                                <a href="<?php echo esc_url($cta_box_contact_btn_link); ?>" class="btn-default"><?php echo esc_html($cta_box_contact_btn_text); ?></a>
                            </div>
                            <!-- CTA Box Button End -->
                            <span>or</span>
                            <!-- Contact Now Box Start -->
                            <div class="contact-now-box">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($cta_box_contact_info_icon); ?>" alt="<?php echo esc_html($cta_box_contact_info_text); ?>">
                                </div>
                                <div class="contact-now-box-content">
                                    <span><?php echo esc_html($cta_box_contact_info_text); ?></span>
                                    <p><a href="tel:<?php echo esc_html($cta_box_contact_info_ph_number); ?>"><?php echo esc_html($cta_box_contact_info_ph_number); ?></a></p>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                        </div>
                        <!-- CTA Box Body End -->
                    </div>
                    <!-- CTA Box Content End -->
                </div>

                <div class="col-lg-6 col-md-5">
                    <!-- CTA Box Image Start -->
                    <div class="cta-box-image">
                        <img src="<?php echo esc_url($cta_box_image); ?>" alt="">
                    </div>
                    <!-- CTA Box Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->