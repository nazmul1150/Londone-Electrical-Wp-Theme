<?php
/**
 * Title: Header
 * Slug: londone_electrical/header
 * Categories: header
 * Description: Header with site title and navigation.
 */

?>

<!-- wp:html -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'navbar-nav ms-auto',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                    'depth'          => 2,
                    'walker'         => new Bootstrap_Navwalker(), // Custom Walker (নিচে দেওয়া আছে)
                ) );
            ?>
        </div>
    </div>
</nav>
<!-- /wp:html -->