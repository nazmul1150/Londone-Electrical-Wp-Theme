<?php
/**
 * Title: Header
 * Slug: londone_electrical/header
 * Categories: header
 * Description: Header with site title and navigation.
 */

 global $londone_electrical;
 $header_logo = $londone_electrical['header-logo'];
 $header_phone = $londone_electrical['header-phone'] ?? '123456789';
 $header_btn_text = $londone_electrical['header-button-text'] ?? 'Book Now';
 $header_btn_link = $londone_electrical['header-button-link'] ?? '#';

?>

<!-- wp:html -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <?php
                      if (!empty($header_logo['url'])) {
                        echo '<img src="' . esc_url($header_logo['url']) . '" alt="Site Logo">';
                      } else {
                        echo '<img src="' . esc_url(get_template_directory_uri() . '/images/logo.svg') . '" alt="Default Logo">';
                      } 
                    ?>
                    
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary_menu',
                                'depth'          => 3,
                                'menu_class'     => 'navbar-nav ms-auto',
                                'menu_id'        => 'menu',
                                'container'      => false,
                                'fallback_cb'    => '__return_false',
                                'walker'         => new Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </div>
                    
                    <!-- Header Contact Btn Start -->
                    <div class="header-contact-btn">
                        <a href="tel:<?php echo esc_html($header_phone); ?>" class="header-contact-now"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/icon-phone.svg'); ?>" alt="phone icon"><?php echo esc_html($header_phone); ?></a>
                        <a href="<?php echo esc_url($header_btn_link); ?>" class="btn-default"><?php echo esc_html($header_btn_text); ?></a>
                    </div>
                    <!-- Header Contact Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- /wp:html -->