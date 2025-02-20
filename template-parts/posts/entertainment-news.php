<div class="news-block-main mt-4">
	<?php $cat_id = 10; ?>
	<div class="entertainment-block" style="background: #3a072d">
		<div class="category_item">
			<div class="cat-name">
				<a href="<?php echo get_category_link($cat_id); ?>"
					style="color: var(--tlt-white) !important"><?php echo get_cat_name($cat_id); ?></a>
			</div>
		</div>
		<div class="enter_background-sec">
			<div class="row">
				<div class="col-md-8 col-sm-12 mb-3">
					<?php
					$args = array(
						'cat' => $cat_id,
						'posts_per_page' => 1,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'DESC',
					);
					$loop = new WP_Query($args);
					if ($loop->have_posts()):
						while ($loop->have_posts()):
							$loop->the_post();
							?>
							<div class="topline_mfade_news photo-feature-lrg">
								<a href="<?php the_permalink(); ?>" class="text-light">
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail('full');
									} else {
										default_image();
									}
									?>
									<div class="topline_mfade_news-content text-center">
										<h2 class="news-title"><?php the_title(); ?></h2>
									</div>
								</a>
							</div>
						<?php
						endwhile;
					endif; ?>
				</div>
				<?php
				$mon_sec_args = array(
					'cat' => $cat_id,
					'post_status' => 'publish',
					'order' => 'DEC',
					'showposts' => 2,
					'offset' => 1
				);
				$mon_sec_loop = new WP_Query($mon_sec_args);
				?>
				<div class="col-md-4 col-sm-12">
					<?php
					while ($mon_sec_loop->have_posts()):
						$mon_sec_loop->the_post();
						?>
						<div class="topline_mfade_news smallimg mb-3 photo-feature-lrg">
							<a href="<?php the_permalink(); ?>" class="text-light">
								<?php
								if (has_post_thumbnail()) {
									the_post_thumbnail('image_270');
								} else {
									default_image();
								}
								?>
								<div class="topline_mfade_news-content text-center">
									<h2 style="font-size: 26px !important" class="news-title"><?php the_title(); ?></h2>
								</div>
							</a>
						</div>
					<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<?php if (is_active_sidebar('adv7')): ?>
			<div class="advertisement-long mt-4 text-center">
				<?php dynamic_sidebar('adv7'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>