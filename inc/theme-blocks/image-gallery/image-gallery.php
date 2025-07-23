<?php
    global $londone_electrical;

?>
 
 <!-- Photo Gallery Section Start -->
 <div class="page-gallery">
        <div class="container">
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

            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery Section End -->