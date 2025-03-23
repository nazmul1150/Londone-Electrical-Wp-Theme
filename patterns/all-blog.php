<?php
/**
 * Title: Post Blog Patterns
 * Slug: londone_electrical_blog_all
 * Categories: londone_electrical_post-format
 * Description: Prints the name of the post format with the help of the Block Bindings API.
 */

?>
<!-- wp:group -->
<div class="page-header bg-section dark-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<div class="page-header-box">
					<h1 class="text-anime-style-2" data-cursor="-opaque">Latest blog</h1>
					<nav class="wow fadeInUp">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="./">home</a></li>
							<li class="breadcrumb-item active" aria-current="page">blog</li>
						</ol>
					</nav>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="page-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp">
					
					<div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-1.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">How to Choose the Right Lighting for Your Home</a></h2>
						</div>
						
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp" data-wow-delay="0.2s">
				   
				   <div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-2.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">Why Regular Electrical Inspections Are Crucial for Your Business</a></h2>
						</div>
						
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp" data-wow-delay="0.4s">
					
					<div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-3.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">The Benefits of Installing Energy-Efficient Electrical Systems</a></h2>
						</div>
						

						
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp" data-wow-delay="0.6s">
					
					<div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-4.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">Tips for Maintaining a Safe and Efficient Electrical System</a></h2>
						</div>
						
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp" data-wow-delay="0.8s">
				  
				   <div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-5.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">How to Identify Signs of Electrical Wear and Tear at Home</a></h2>
						</div>
						
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-lg-4 col-md-6">
				
				<div class="post-item wow fadeInUp" data-wow-delay="1s">
					
					<div class="post-featured-image">
						<a href="blog-single.html" data-cursor-text="View">
							<figure class="image-anime">
								<img src="<?php echo get_template_directory_uri(); ?>/images/post-6.jpg" alt="">
							</figure>
						</a>
					</div>
					
					<div class="post-item-body">
						
						<div class="post-item-content">
							<h2><a href="blog-single.html">Top Reasons to Upgrade to Modern Electrical Solutions</a></h2>
						</div>
					
						<div class="post-item-btn">
							<a href="blog-single.html" class="readmore-btn">read more</a>
						</div>
						
					</div>
					
				</div>
				
			</div>

			<div class="col-lg-12">
				
				<div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
					<ul class="pagination">
						<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
					</ul>
				</div>
				
			</div>

			<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page'); // Reading Settings থেকে সংখ্যা নেওয়া

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $posts_per_page,
    'paged'          => $paged,
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); 
?>
    <div class="col-lg-4 col-md-6">
        <div class="post-item wow fadeInUp">
            <div class="post-featured-image">
                <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                    <figure class="image-anime">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="Default Image">
                        <?php endif; ?>
                    </figure>
                </a>
            </div>
            
            <div class="post-item-body">
                <div class="post-item-content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                
                <div class="post-item-btn">
                    <a href="<?php the_permalink(); ?>" class="readmore-btn">read more</a>
                </div>
            </div>
        </div>
    </div>
<?php 
    endwhile;
?>

    <!-- Pagination -->
    <div class="col-lg-12">
        <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
            <?php 
            echo paginate_links(array(
                'total'        => $query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'prev_text'    => '<i class="fa-solid fa-arrow-left-long"></i>',
                'next_text'    => '<i class="fa-solid fa-arrow-right-long"></i>',
                'type'         => 'list',
            ));
            ?>
        </div>
    </div>

<?php 
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>


		</div>
	</div>
</div>
<!-- /wp:group -->
