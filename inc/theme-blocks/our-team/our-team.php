<?php
     global $londone_electrical;

     $our_team_subtitle = !empty($londone_electrical['our-team-subtitle']) ? esc_html($londone_electrical['our-team-subtitle']) : '';
     $our_team_title = !empty($londone_electrical['our-team-title']) ? esc_html($londone_electrical['our-team-title']) : '';
     $our_team_title_span = !empty($londone_electrical['our-team-title-span']) ? esc_html($londone_electrical['our-team-title-span']) : '';

?>

<!-- Our Team Section Start -->
<div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp"><?php echo esc_html($our_team_subtitle); ?></h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><?php echo esc_html($our_team_title); ?> <span><?php echo esc_html($our_team_title_span); ?></span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">

            <?php
            $team_items = $londone_electrical['our-team-items'];

            if ( ! empty( $team_items['our-team-item-image'] ) ) {

            $total = count($team_items['our-team-item-name']);

            for ( $i = 0; $i < $total; $i++ ) {
                $image_url = !empty($team_items['our-team-item-image'][$i]['url']) ? esc_url($team_items['our-team-item-image'][$i]['url']) : '';
                $name = esc_html($team_items['our-team-item-name'][$i]);
                $designation = esc_html($team_items['our-team-item-designation'][$i]);
                $facebook = esc_url($team_items['our-team-item-social-link-facebook'][$i]);
                $twitter = esc_url($team_items['our-team-item-social-link-x'][$i]);
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp">
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>">
                                </figure>
                            </a>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3><a><?php echo esc_html($name); ?></a></h3>
                            <p><?php echo esc_html($designation); ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>

            </div>
        </div>
    </div>
    <!-- Our Team Section Start -->