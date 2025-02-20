<div class="banner-block">
	<?php if (is_active_sidebar('adv1')): ?>
		<div class="advertisement-long mt-4 text-center">
			<?php dynamic_sidebar('adv1'); ?>
		</div>
	<?php endif; ?>
	<?php
	$banner_args = array(
		'posts_per_page' => 2,
		'meta_query' => array(
			array(
				'key' => 'banner_news',
				'value' => '"Banner"',
				'compare' => 'LIKE',
			)
		)
	);
	$banner_loop = new WP_Query($banner_args);
	if ($banner_loop->have_posts()):
		while ($banner_loop->have_posts()):
			$banner_loop->the_post();
			?>
			<div class="baanner_item w-100 mt-3">
				<div class="bann w-100">
					<div class="banner text-center">
						<?php if (get_field('feature_title')): ?>
							<div class="feature_title mt-4 text-light" style="border-bottom: 1px var(--tlt-secondary) solid">
								<span
									style="font-size: 18px; background: var(--tlt-secondary); padding: 3px 20px 0px 20px;"><?php echo get_field('feature_title') ?></span>
							</div>
						<?php endif; ?>
						<h1 class="p-3">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
							<?php if (get_field('sub_title')): ?>
								<div class="title_sub_single mt-2">
									<h5><?php echo get_field('sub_title'); ?></h5>
								</div>
							<?php endif; ?>
						</h1>
						<?php
						$banner_options = get_field('banner_news');
						if ($banner_options && in_array('With Image', $banner_options)): ?>
							<figure class="image">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) {
										the_post_thumbnail('full');
									} else {
										default_image();
									}
									?>
								</a>
							</figure>
							<?php
						endif;
						?>
						<div class="banner_author_post text-center">
							<div class="tk_author_section mr-lg-4">
								<span class="tk__logo mr-2">
									<?php
									if (get_field('writer_image')) {
										$writer_image = get_field('writer_image');
										echo '<img src="' . $writer_image . '" class="writer_image">';
									} else {
										$author_id = get_the_author_meta('ID');
										$author_badge = get_field('author_image', 'user_' . $author_id);
										echo '<img src="' . $author_badge . '" class="writer_image">';
									}
									?>
								</span>
								<label>
									<?php if (get_field('writer_name')) {
										echo get_field('writer_name');
									} else {
										echo the_author_posts_link();
									}
									?>
								</label>
							</div>
							<div class="published_time_ago">
								<i class="fa fa-clock-o mr-2"></i>
								<span><?php echo time_ago(); ?> </span>
							</div>
						</div>
					</div>
				</div>
				<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>
		<?php if (is_active_sidebar('adv2')): ?>
			<div class="advertisement-long text-center mt-4">
				<?php dynamic_sidebar('adv2'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>