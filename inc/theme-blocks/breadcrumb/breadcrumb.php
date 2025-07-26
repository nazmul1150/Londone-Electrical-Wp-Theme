<!-- Page Header Start -->
<div class="page-header bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                        <?php
                        if ( is_home() && ! is_front_page() ) {
                            // Blog posts page title (if set)
                            echo get_the_title( get_option( 'page_for_posts' ) );
                        } elseif ( is_post_type_archive() ) {
                            // Custom post type archive title
                            echo post_type_archive_title( '', false );
                        } elseif ( is_category() ) {
                            echo single_cat_title( '', false );
                        } elseif ( is_tag() ) {
                            echo single_tag_title( '', false );
                        } elseif ( is_search() ) {
                            printf( __( 'Search results for: %s', 'textdomain' ), get_search_query() );
                        } elseif ( is_404() ) {
                            _e( '404 Not Found', 'textdomain' );
                        } else {
                            // Default: single post or page
                            the_title();
                        }
                        ?>
                    </h1>

                    <?php if ( is_single() && get_post_type() === 'post' ) : ?>
                        <!-- Post Author & Date (for single blog posts only) -->
                        <div class="post-single-meta wow fadeInUp">
                            <ol class="breadcrumb">
                                <li><i class="fa-regular fa-user"></i> <?php the_author(); ?></li>
                                <li><i class="fa-regular fa-clock"></i> <?php echo get_the_date('d M Y'); ?></li>
                            </ol>
                        </div>
                    <?php else : ?>
                        <!-- Breadcrumb for pages, archives, custom post types etc -->
                        <nav class="wow fadeInUp">
                            <?php londone_custom_breadcrumbs(); ?>
                        </nav>
                    <?php endif; ?>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->