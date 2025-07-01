<div class="hero hero-bg-image hero-slider-layout bg-section dark-section">
    <div class="swiper">
        <div class="swiper-wrapper">

            <?php
            // global $londone_electrical;

            // $slider_items = $londone_electrical['slider-items'] ?? [];
            
            // $slide_count = isset($slider_items['slider-item-title']) ? count($slider_items['slider-item-title']) : 0;
            // echo"<pre>";
            // print_r($slider_items);
            // echo "</pre>";
            //var_dump($slider_items);

            global $londone_electrical;

            $slider_items = $londone_electrical['slider-items'];
                        
            if ( ! empty( $slider_items['slider-item-title'] ) ) {
                $total_slides = count( $slider_items['slider-item-title'] );

                for ( $i = 0; $i < $total_slides; $i++ ) {
                    $image_url = !empty($slider_items['slider-img'][$i]['url']) ? esc_url($slider_items['slider-img'][$i]['url']) : get_template_directory_uri() . '/images/hero-bg.jpg';

                    $title = !empty($slider_items['slider-item-title'][$i]) ? esc_html($slider_items['slider-item-title'][$i]) : '';

                    $desc = !empty($slider_items['slider-item-text'][$i]) ? esc_html($slider_items['slider-item-text'][$i]) : '';

                    $btn1_text = !empty($slider_items['slider-item-button1-text'][$i]) ? esc_html($slider_items['slider-item-button1-text'][$i]) : '';

                    $btn1_link = !empty($slider_items['slider-item-button1-link'][$i]) ? esc_url($slider_items['slider-item-button1-link'][$i]) : '#';

                    $btn2_text = !empty($slider_items['slider-item-button2-text'][$i]) ? esc_html($slider_items['slider-item-button2-text'][$i]) : '';

                    $btn2_link = !empty($slider_items['slider-item-button2-link'][$i]) ? esc_url($slider_items['slider-item-button2-link'][$i])  : '#';

            ?>

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background-image: url('<?php echo $image_url; ?>');">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($title); ?></h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($desc); ?></p>
                                        </div>

                                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="hero-btn">
                                                <a href="<?php echo esc_url($btn1_link); ?>" class="btn-default btn-highlighted"><?php echo esc_html($btn1_text); ?></a>
                                            </div>
                                            <div class="video-play-button">
                                                <a href="<?php echo esc_url($btn2_link); ?>" class="popup-video" data-cursor-text="Play">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                                <p><?php echo esc_html($btn2_text); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

            <?php  } } ?>
            
       </div>
    </div>        
</div>