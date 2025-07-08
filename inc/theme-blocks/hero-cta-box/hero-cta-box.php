<!-- Hero CTA Box Start -->
<?php
     global $londone_electrical;


    // echo"<pre>";
    // print_r($slider_options);
    // echo "</pre>";
?>

<div class="hero-cta-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2">
                    <div class="hero-cta-info">
                        <!-- Hero Cta Item Start -->
                        <div class="hero-cta-item wow fadeInUp">
                            <!-- Hero Cta Item Header Start -->
                            <div class="hero-cta-item-header">
                                <div class="icon-box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/icon-contact-now.svg" alt="">
                                </div>
                                <div class="hero-cta-item-title">
                                    <h3><?php echo esc_html($londone_electrical['slider-bottom-content1-title']); ?></h3>
                                </div>
                            </div>
                            <!-- Hero Cta Item Header End -->

                            <!-- Hero Cta Item Content Start -->
                            <div class="hero-cta-item-content">
                                <p><a href="mailto:<?php echo esc_html($londone_electrical['slider-bottom-content1-email']); ?>"><span>Email:</span> <?php echo esc_html($londone_electrical['slider-bottom-content1-email']); ?></a></p>
                                <p><a href="mailto:<?php echo esc_html($londone_electrical['slider-bottom-content1-phone']); ?>"><span>Phone:</span> <?php echo esc_html($londone_electrical['slider-bottom-content1-phone']); ?></a></p>
                            </div>
                            <!-- Hero Cta Item Content End -->
                        </div>
                        <!-- Hero Cta Item End -->

                        <!-- Hero Cta Item Start -->
                        <div class="hero-cta-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Hero Cta Item Header Start -->
                            <div class="hero-cta-item-header">
                                <div class="icon-box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt="">
                                </div>
                                <div class="hero-cta-item-title">
                                    <h3><?php echo esc_html($londone_electrical['slider-bottom-content2-title']); ?></h3>
                                </div>
                            </div>
                            <!-- Hero Cta Item Header End -->

                            <!-- Hero Cta Item Content Start -->
                            <div class="hero-cta-item-content">
                                <p><?php echo esc_html($londone_electrical['slider-bottom-content2-location-address']); ?></p>
                            </div>
                            <!-- Hero Cta Item Content End -->
                        </div>
                        <!-- Hero Cta Item End -->
                    </div>
                </div>

                <div class="col-lg-5 order-lg-2 order-1">
                    <!-- Our Expert Box Start -->
                    <div class="our-expert-box">
                        <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo esc_html($londone_electrical['slider-bottom-content3-book-now-title']); ?></h2>
                        <?php if(! empty( $londone_electrical['slider-bottom-content3-book-now-button-link'] )){ ?>
                           <a href="<?php echo esc_url($londone_electrical['slider-bottom-content3-book-now-button-link']); ?>" class="btn-default btn-highlighted wow fadeInUp" data-wow-delay="0.4s"><?php echo esc_html($londone_electrical['slider-bottom-content3-book-now-button-text']); ?></a>
                        <?php } ?>
                    </div>
                    <!-- Our Expert Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero CTA Box End -->