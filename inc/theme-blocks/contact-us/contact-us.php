<?php
    global $londone_electrical;

    $page_contact_us_subtitle = !empty($londone_electrical['page-contact-us-subtitle']) ? esc_html($londone_electrical['page-contact-us-subtitle']) : '';
    $page_contact_us_title = !empty($londone_electrical['page-contact-us-title']) ? esc_html($londone_electrical['page-contact-us-title']) : '';
    $page_contact_us_title_span = !empty($londone_electrical['page-contact-us-title-span']) ? esc_html($londone_electrical['page-contact-us-title-span']) : '';
    $page_contact_us_title_desc = !empty($londone_electrical['page-contact-us-title-desc']) ? esc_html($londone_electrical['page-contact-us-title-desc']) : '';
    
    $form_shortcode = !empty($londone_electrical['page-contact-us-form-shortcode']) ? $londone_electrical['page-contact-us-form-shortcode'] : '[your_contact_form_shortcode]';
    $page_contact_us_map_iframe = !empty($londone_electrical['page-contact-us-map-iframe']) ? esc_html($londone_electrical['page-contact-us-map-iframe']) : '';
    
    $page_contact_us_location_icon = !empty($londone_electrical['page-contact-us_location_icon']['url']) ? esc_html($londone_electrical['page-contact-us_location_icon']['url']) : get_template_directory_uri() . '/images/icon-location.svg';
    $page_contact_us_location_title = !empty($londone_electrical['page-contact-us_location_title']) ? esc_html($londone_electrical['page-contact-us_location_title']) : '';
    $page_contact_us_location_address = !empty($londone_electrical['page-contact-us_location_address']) ? esc_html($londone_electrical['page-contact-us_location_address']) : '';
    
    $page_contact_us_email_icon = !empty($londone_electrical['page-contact-us_email_icon']['url']) ? esc_html($londone_electrical['page-contact-us_email_icon']['url']) : get_template_directory_uri() . '/images/icon-mail-primary.svg';
    $page_contact_us_email_title = !empty($londone_electrical['page-contact-us_email_title']) ? esc_html($londone_electrical['page-contact-us_email_title']) : '';
    $page_contact_us_email_address = !empty($londone_electrical['page-contact-us_email_address']) ? esc_html($londone_electrical['page-contact-us_email_address']) : '';
    
    $page_contact_us_phone_icon = !empty($londone_electrical['page-contact-us_phone_icon']['url']) ? esc_html($londone_electrical['page-contact-us_phone_icon']['url']) : get_template_directory_uri() . '/images/icon-phone-primary.svg';
    $page_contact_us_phone_title = !empty($londone_electrical['page-contact-us_phone_title']) ? esc_html($londone_electrical['page-contact-us_phone_title']) : '';
    $page_contact_us_phone_number = !empty($londone_electrical['page-contact-us_phone_number']) ? esc_html($londone_electrical['page-contact-us_phone_number']) : '';
    
     
?>

<!-- Page Contact Us Start -->
<div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><?php echo esc_html($page_contact_us_subtitle); ?></h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($page_contact_us_title); ?> <span><?php echo esc_html($page_contact_us_title_span); ?></span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($page_contact_us_title_desc); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                <div class="row">                                
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone no." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form> -->
                           <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <iframe src="<?php echo esc_url($page_contact_us_map_iframe); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->

                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item location-item wow fadeInUp">
                            <div class="contact-info-header">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($page_contact_us_location_icon); ?>" alt="">
                                </div>
                                <div class="contact-info-title">
                                    <h3><?php echo esc_html($page_contact_us_location_title); ?></h3>
                                </div>
                            </div>        
                            <div class="contact-info-content">
                                <p><?php echo esc_html($page_contact_us_location_address); ?></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="contact-info-header">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($page_contact_us_email_icon); ?>" alt="">
                                </div>
                                <div class="contact-info-title">
                                    <h3><?php echo esc_html($page_contact_us_email_title); ?></h3>
                                </div>
                            </div>        
                            <div class="contact-info-content">
                                <p><a href="mailto:<?php echo $page_contact_us_email_address; ?>"><?php echo esc_html($page_contact_us_email_address); ?></a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="contact-info-header">
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($page_contact_us_phone_icon); ?>" alt="">
                                </div>
                                <div class="contact-info-title">
                                    <h3><?php echo esc_html($page_contact_us_phone_title); ?></h3>
                                </div>
                            </div>        
                            <div class="contact-info-content">
                                <p><a href="tel:<?php echo $page_contact_us_phone_number; ?>"><?php echo esc_html($page_contact_us_phone_number); ?></a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->