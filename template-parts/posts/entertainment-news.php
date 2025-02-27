<div class="news-block-main mt-4">
	<?php $cat_id = 8; ?>
	<div class="entertainment-block p-3" style="background: #3a072d">
		<div class="category_item">
			<div class="cat-name">
				<a href="<?php echo get_category_link($cat_id); ?>"
					style="color: var(--tlt-white) !important"><?php echo get_cat_name($cat_id); ?></a>
			</div>
		</div>
		<div class="enter_background-sec">
			<div class="row">
				<?php
				$args = array(
					'cat' => $cat_id,
					'posts_per_page' => 4,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$loop = new WP_Query($args);
				if ($loop->have_posts()):
					while ($loop->have_posts()):
						$loop->the_post();
						?>
						<div class="col-md-3 col-sm-12 mb-3">
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
										<h4 class="news-title"><?php the_title(); ?></h4>
									</div>
								</a>
							</div>
						</div>
						<?php
					endwhile;
				endif; ?>
			</div>
		</div>
		<?php if (is_active_sidebar('adv7')): ?>
			<div class="advertisement-long mt-4 text-center">
				<?php dynamic_sidebar('adv7'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>