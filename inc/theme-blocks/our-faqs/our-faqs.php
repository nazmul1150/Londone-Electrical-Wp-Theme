 <?php
     global $londone_electrical;

     $our_faqs_subtitle = !empty($londone_electrical['our-faqs-subtitle']) ? esc_html($londone_electrical['our-faqs-subtitle']) : '';
     $our_faqs_title = !empty($londone_electrical['our-faqs-title']) ? esc_html($londone_electrical['our-faqs-title']) : '';
     $our_faqs_title_span = !empty($londone_electrical['our-faqs-title-span']) ? esc_html($londone_electrical['our-faqs-title-span']) : '';
     $our_faqs_desc = !empty($londone_electrical['our-faqs-desc']) ? esc_html($londone_electrical['our-faqs-desc']) : '';

     $our_faqs_image = !empty($londone_electrical['our-faqs-image']['url']) ? esc_html($londone_electrical['our-faqs-image']['url']) : get_template_directory_uri() . '/images/faqs-image.jpg';

?>

<!-- Our Faqs Section Start -->
<div class="our-faqs bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_faqs_subtitle); ?></h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><?php echo esc_html($our_faqs_title); ?> <span><?php echo esc_html($our_faqs_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p><?php echo esc_html($our_faqs_desc); ?></p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Faqs Image Start -->
                    <div class="faqs-image">
                        <figure class="image-anime reveal">
                            <img src="<?php echo esc_url($our_faqs_image); ?>" alt="">
                        </figure>
                    </div>
                    <!-- Faqs Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->

                        <?php
                        if ( !empty($londone_electrical['our-faqs-items']) && is_array($londone_electrical['our-faqs-items']) ) :
                            $delay = 0.0;
                            $index = 1;
                            foreach ( $londone_electrical['our-faqs-items'] as $faqs ) :
                                $faqs_title = !empty($faqs['title']) ? esc_html($faqs['title']) : '';
                                $faqs_desc  = !empty($faqs['description']) ? esc_html($faqs['description']) : '';
                                
                                // Unique IDs for accordion
                                $heading_id = 'heading' . $index;
                                $collapse_id = 'collapse' . $index;

                                // First item open by default
                                $is_first = ($index === 1);
                                $collapsed_class = $is_first ? '' : 'collapsed';
                                $show_class = $is_first ? 'show' : '';
                        ?>
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                                <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                    <button class="accordion-button <?php echo $collapsed_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                        Q<?php echo $index; ?>. <?php echo $faqs_title; ?>
                                    </button>
                                </h2>
                                <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse <?php echo $show_class; ?>" aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p><?php echo $faqs_desc; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                        <?php
                                $delay += 0.2;
                                $index++;
                            endforeach;
                        endif;
                        ?>

                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->