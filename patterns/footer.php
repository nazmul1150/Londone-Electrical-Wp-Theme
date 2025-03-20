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
 $footer_column2_links= $londone_electrical['footer-column2-links'] ?? 'Add Link';//repeater
//column 3
 $footer_column3_title = $londone_electrical['footer-column3-title'] ?? 'Contact Us';
 $footer_column3_address= $londone_electrical['footer-column3-address'] ?? '3891 Ranchview Dr. richardson, california 17';
 $foofooter_column3_emails= $londone_electrical['footer-column3-emails'] ?? 'info@domain.com';//repeater
 $footer_column3_phons= $londone_electrical['footer-column3-phons'] ?? '+01 456 785 889'; //repeater
 //column 4
 $footer_column4_title = $londone_electrical['footer-column4-title'] ?? 'Get in touch';
 $footer_column4_text = $londone_electrical['footer-column4-text'] ?? 'Sign up for alerts, our latest blogs, thoughts, and insights';
 $footer_column4_mailchimp_api= $londone_electrical['footer-column4-mailchimp-api'] ?? 'https://mailchimp.com/api';
//copyright area
  $footer_copyright-text = $londone_electrical['footer-copyright-text'] ?? 'All Rights Reserved.';
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
                    <h3>quick link</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">our services</a></li>
                        <li><a href="projects.html">Latest projects</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->	
            </div>

            <div class="col-lg-3 col-md-7">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>contact us</h3>
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="images/icon-location-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>3891 Ranchview Dr. richardson, california 17</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                    
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="images/icon-mail-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p><a href="mailto:info@domain.com">support@domainname.com</a></p>
                            <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                    
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="images/icon-phone-accent.svg" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p><a href="tel:+456785889">+01 456 785 889</a></p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-12">
                <!-- Footer Newsletter Form Start -->
                <div class="footer-links footer-newsletter-form">
                    <h3>Get in touch</h3>
                    <p>Sign up for alerts, our latest blogs, thoughts, and insights</p>
                    <form id="newslettersForm" action="#" method="POST">
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
                        <p>Copyright © 2025 All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
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
