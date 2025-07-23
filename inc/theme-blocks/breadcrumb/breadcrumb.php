<!-- Page Header Start -->
<div class="page-header bg-section dark-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Page Header Box Start -->
				<div class="page-header-box">
					<h1 class="text-anime-style-2" data-cursor="-opaque"><?php the_title(); ?></h1>

					<?php if ( is_single() ) : ?>
						<!-- Post Author & Date (for single post only) -->
						<div class="post-single-meta wow fadeInUp">
							<ol class="breadcrumb">
								<li><i class="fa-regular fa-user"></i> <?php the_author(); ?></li>
								<li><i class="fa-regular fa-clock"></i> <?php echo get_the_date('d M Y'); ?></li>
							</ol>
						</div>
					<?php else : ?>
						<!-- Breadcrumb (for pages or others) -->
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

