<?php
/**
 * Title: Topbar
 * Slug: londone_electrical/topbar
 * Categories: header
 */

 global $londone_electrical;
 $topbar_address = $londone_electrical['topbar-address']?? '25 Jump St, NY 1001';
 $topbar_email = $londone_electrical['topbar-email'] ?? 'info@domainname.com';
 $topbar_instagram = $londone_electrical['topbar-instagram'] ?? '#';
 $topbar_facebook = $londone_electrical['topbar-facebook'] ?? '#';
 $topbar_twitter = $londone_electrical['topbar-twitter'] ?? '#';
?>

<!-- wp:group -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-contact-info">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt="">25 Jump St, NY 1001</li>
                        <li><a href="mailto:info@domainname.com"><img src="<?php echo get_template_directory_uri();?>/images/icon-mail.svg" alt="">info@domainname.com</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-md-3">
                <!-- Topbar Social Links Start -->
                <div class="topbar-social-links">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <!-- Topbar Social Links End -->
            </div>
        </div>
    </div>
</div>
<!-- /wp:group -->
