<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">

            <?php
                // Current paged
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => get_option('posts_per_page'), // ← Reading settings থেকে নিচ্ছে
                    'paged'          => $paged,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );

                $blog_query = new WP_Query($args);

                $delay = 0.0;

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        $post_title = get_the_title();
                        $post_link  = get_permalink();
                        $post_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                        if (!$post_image) {
                            $post_image = get_template_directory_uri() . '/images/default.jpg';
                        }
            ?>

            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                    <div class="post-featured-image">
                        <a href="<?php echo esc_url($post_link); ?>" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="<?php echo esc_url($post_image); ?>" alt="<?php echo esc_attr($post_title); ?>">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content">
                            <h2><a href="<?php echo esc_url($post_link); ?>"><?php echo esc_html($post_title); ?></a></h2>
                        </div>
                        <div class="post-item-btn">
                            <a href="<?php echo esc_url($post_link); ?>" class="readmore-btn">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </div>

            <?php
                    $delay += 0.2;
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
            ?>

            <div class="col-lg-12">
                <!-- Page Pagination Start -->
                <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                    <?php
                    $total_pages = $blog_query->max_num_pages;
                    $current_page = max(1, get_query_var('paged'));

                    $pagination_links = paginate_links(array(
                        'total'        => $total_pages,
                        'current'      => $current_page,
                        'prev_text'    => '<i class="fa-solid fa-arrow-left-long"></i>',
                        'next_text'    => '<i class="fa-solid fa-arrow-right-long"></i>',
                        'type'         => 'array', // Important to get array of links
                        'before_page_number' => '',
                        'after_page_number'  => '',
                    ));

                    if (!empty($pagination_links)) :
                        echo '<ul class="pagination">';
                        foreach ($pagination_links as $link) {
                            // Check if this is the current page
                            $active = strpos($link, 'current') !== false ? ' class="active"' : '';
                            echo '<li' . $active . '>' . $link . '</li>';
                        }
                        echo '</ul>';
                    endif;
                    ?>
                </div>
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Blog End -->
