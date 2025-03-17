<?php
/**
 * Title: Header
 * Slug: londone_electrical/header
 * Categories: header
 * Description: Header with site title and navigation.
 */

?>

<!-- wp:html -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Logo">
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
                        <a href="tel:123456789" class="header-contact-now"><img src="images/icon-phone.svg" alt="">(123) 456 - 789</a>
                        <a href="contact.html" class="btn-default">book now</a>
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