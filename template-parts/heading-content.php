<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="single_heading_part pb-3">
		<div class="heading">
			<h1><?php the_title(); ?></h1>
		</div>
		<?php if(get_field('sub_title')): ?>
									<div class="title_sub_single mt-2">
										<h5 class="font-italic"><?php echo get_field('sub_title'); ?></h5>
									</div>
								<?php endif; ?>
		<div class="share_author_block">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 mt-2">
					<div class="justify-content-between d-inline-flex right_data">
						<div class="author-meta">
							<div class="author-img">
								<?php
								if(get_field('writer_image')){
									$writer_image = get_field('writer_image');
									echo '<img src="'.$writer_image.'" class="writer_image">';
								}
								else{
									$author_id = get_the_author_meta('ID');
									$author_badge = get_field('author_image', 'user_'. $author_id );
									echo '<img src="'.$author_badge.'" class="writer_image">';
								}
								?>
							</div>
							<span class="author-name">
								<?php if(get_field('writer_name')){
									echo get_field('writer_name');
								}
								else{
									echo the_author_posts_link();
								} 
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="share_button float-right mt-md-2 mt-lg-2">
						<div class="sharethis-inline-share-buttons"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>