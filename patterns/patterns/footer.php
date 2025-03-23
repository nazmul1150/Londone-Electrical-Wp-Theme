<?php
/**
 * Title: Footer
 * Slug: londone_electrical/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns with logo, title, tagline and links.
 */

 global $londone_electrical;
 //column 1
 $footer_logo = $londone_electrical['footer-logo'];
 $footer_column1_text = $londone_electrical['footer-column1-text'] ?? 'Licensed electricians delivering exceptional service and peace of mind. Contact us anytime';
 //column 2
$footer_column2_title = $londone_electrical['footer-column2-title'] ?? 'Quick Link';
$footer_column2_links= $londone_electrical['footer-column2-links'];//repeater
//column 3
 $footer_column3_title = $londone_electrical['footer-column3-title'] ?? 'Contact Us';
 $footer_column3_address= $londone_electrical['footer-column3-address'] ?? '3891 Ranchview Dr. richardson, california 17';
 $footer_column3_emails= $londone_electrical['footer-column3-emails'];//repeater
 $footer_column3_phons= $londone_electrical['footer-column3-phons'] ?? '+01 456 785 889'; //repeater
 //column 4
 $footer_column4_title = $londone_electrical['footer-column4-title'] ?? 'Get in touch';
 $footer_column4_text = $londone_electrical['footer-column4-text'] ?? 'Sign up for alerts, our latest blogs, thoughts, and insights';
 $footer_column4_mailchimp_api= $londone_electrical['footer-column4-mailchimp-api'] ?? 'https://mailchimp.com/api';
//copyright area
  $footer_copyright_text = $londone_electrical['footer-copyright-text'] ?? 'All Rights Reserved.';
  $instagram = $londone_electrical['footer-copyright-instagram'] ?? '#';
  $facebook = $londone_electrical['footer-copyright-facebook'] ?? '#';
  $twitter = $londone_electrical['footer-copyright-twitter'] ?? '#';

?>
<!-- wp:group -->
<!-- wp:pattern {"slug":"mytheme/footer-col-one"} /-->
<footer class="main-footer bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!-- About Footer start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <?php
                        if (!empty($footer_logo['url'])) {
                            echo '<img src="' . esc_url($footer_logo['url']) . '" alt="Site Logo">';
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri() . '/images/footer-logo.svg') . '" alt="Default Logo">';
                        } 
                        ?> 
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Contact Box Start -->
                    <div class="about-footer-content">
                        <p><?php echo esc_html($footer_column1_text); ?></p>
                    </div>
                    <!-- Footer Contact Box End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-3 col-md-5">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3><?php echo esc_html($footer_column2_title); ?></h3>
                    <ul>
                        <?php
                            if (!empty($footer_column2_links['footer-column2-link-text'])) {
                                foreach ($footer_column2_links['footer-column2-link-text'] as $key => $text) {
                                    $url = $footer_column2_links['footer-column2-link-url'][$key] ?? '#';
                                    echo '<li><a href="' . esc_url($url) . '">' . esc_html($text) . '</a><br></li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
                <!-- Footer Links End -->	
            </div>

            <div class="col-lg-3 col-md-7">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3><?php echo esc_html($footer_column3_title); ?></h3>
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/images/icon-location-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p><?php echo esc_html($footer_column3_address); ?></p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                    
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/images/icon-mail-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                        <?php
                            if (!empty($footer_column3_emails['footer-column3-email'])) {
                                foreach ($footer_column3_emails['footer-column3-email'] as $key => $text) {
                                    echo '<p><a href="mailto:'.esc_html($text).'">'.esc_html($text).'</a></p>';
                                }
                            }
                        ?>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                    
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="<?php echo get_template_directory_uri();?>/images/icon-phone-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <?php
                                if (!empty($footer_column3_phons['footer-column3-phone'])) {
                                    foreach ($footer_column3_phons['footer-column3-phone'] as $key => $text) {
                                        echo '<p><a href="tel:+'.esc_html($text).'">'.esc_html($text).'</a></p>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-12">
                <!-- Footer Newsletter Form Start -->
                <div class="footer-links footer-newsletter-form">
                    <h3><?php echo esc_html($footer_column4_title); ?></h3>
                    <p><?php echo esc_html($footer_column4_text); ?></p>
                    <form id="newslettersForm" action="<?php echo esc_url($footer_column4_mailchimp_api); ?>" method="POST">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control"  id="mail" placeholder="Enter your email" required>
                            <button type="submit" class="btn-default">subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Footer Newsletter Form End -->
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Section Start -->
                <div class="footer-copyright">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © <?php echo date('Y').' '. esc_html($footer_copyright_text); ?></p>
                    </div>
                    <!-- Footer Copyright Text End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="<?php echo esc_html($twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo esc_html($facebook); ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo esc_html($instagram); ?>"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- Footer Copyright Section End -->
            </div>
        </div>
    </div>
</footer>
<!-- /wp:group -->
