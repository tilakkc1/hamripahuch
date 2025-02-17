<div class="blogs-post-block bg-white py-3 px-2 h-100">
	<?php $cat_id = 6; ?>
	<div class="category_item">
		<div class="cat-name">
			<a href="<?php echo get_category_link( $cat_id ); ?>"><?php echo get_cat_name( $cat_id ); ?></a>
		</div>
	</div>
	<div class="blog_box">
		<?php 
		$blog_args = array(
			'showposts' => 4, 
			'cat' => $cat_id,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC'
		);
		$blog_loop = new WP_Query($blog_args);
		while($blog_loop -> have_posts()):
			$blog_loop -> the_post();
			?>
			<div class="post_items blogs media">
				<div class="post_feature">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('image_70'); ?>
					</a>
				</div>
				<div class="media-body blogi-tit ml-3">
					<div class="blog_title">
						<h5><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a></h5>
					</div>
					<?php if(get_field('writer_name')): ?>
						<ul class="items mb-0 list-unstyled">
							<li style="color: #6c757d !important;"><i class="fa fa-user-circle mr-1"></i><?php echo get_field('writer_name') ?></li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php 
		endwhile;
		wp_reset_postdata(); ?>
	</div>
</div>