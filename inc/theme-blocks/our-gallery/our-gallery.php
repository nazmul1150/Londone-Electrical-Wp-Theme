 <?php
     global $londone_electrical;

     $our_gallery_subtitle = !empty($londone_electrical['our-gallery-subtitle']) ? esc_html($londone_electrical['our-gallery-subtitle']) : '';
     $our_gallery_title = !empty($londone_electrical['our-gallery-title']) ? esc_html($londone_electrical['our-gallery-title']) : '';
     $our_gallery_title_span = !empty($londone_electrical['our-gallery-title-span']) ? esc_html($londone_electrical['our-gallery-title-span']) : '';

     $our_gallery_btn_text_home = !empty($londone_electrical['our-gallery-btn-text-home']) ? esc_html($londone_electrical['our-gallery-btn-text-home']) : '';
     $our_gallery_btn_link_home = !empty($londone_electrical['our-gallery-btn-link-home']) ? esc_html($londone_electrical['our-gallery-btn-link-home']) : '';

?>

<!-- Our Pricing Section Start -->
<div class="our-pricing">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_gallery_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_gallery_title); ?> <span><?php echo esc_html($our_gallery_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">

                <?php
                if ( !empty($londone_electrical['our-gallery-img']) && is_array($londone_electrical['our-gallery-img']) ) :

                    $gallery_items = array_reverse($londone_electrical['our-gallery-img']);

                    $gallery_items = array_slice($gallery_items, 0, 6);

                    foreach ( $gallery_items as $gallery ) :
                        $gallery_image = !empty($gallery['image']) ? esc_url($gallery['image']) : get_template_directory_uri() . '/images/gallery-1.jpg';
                        if ( empty($gallery_image) ) continue;
                ?>
                    <div class="col-lg-4 col-6">
                        <!-- image gallery start -->
                        <div class="photo-gallery wow fadeInUp">
                            <a href="<?php echo $gallery_image; ?>" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo $gallery_image; ?>" alt="gallery-image">
                                </figure>
                            </a>
                        </div>
                        <!-- image gallery end -->
                    </div>
                <?php
                    endforeach;
                endif;
                ?>

            <!-- Goals Content Button Start -->
            <div class="goals-content-btn text-center mt-4">
                <a href="<?php echo esc_url($our_gallery_btn_link_home); ?>" class="btn-default"><?php echo esc_html($our_gallery_btn_text_home); ?></a>
            </div>
            <!-- Goals Content Button End -->
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Our Pricing Section End -->