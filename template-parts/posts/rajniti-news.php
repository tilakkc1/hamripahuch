<div class="my-3">
	<hr>
</div>
<div class="business-block mt-3">
	<div class="buss-block son__headline">
		<?php $cat_id = 3; ?>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="category_item">
					<div class="cat-name">
						<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 mb-3">
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
									<h2 class="news-title text-light"><?php the_title(); ?></h2>
								</div>
							</a>
						</div>
						<?php
					endwhile;
				endif; ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'post',
						'cat' => $cat_id,
						'showposts' => '4',
						'post_status' => 'publish',
						'order' => 'DESC',
						'orderby' => 'date',
					);
					$loop = new WP_Query($args);
					while ($loop->have_posts()):
						$loop->the_post();
						?>
						<div class="col-md-6 col-6 col-sm-12">
							<div class="thulo__son__item mb-3 business">
								<div class="item__feature">
									<a href="<?php the_permalink(); ?>">
										<figure class="image">
											<?php
											if (has_post_thumbnail()) {
												the_post_thumbnail('medium');
											} else {
												default_image();
											}
											?>
										</figure>
									</a>
								</div>
								<div class="item__title">
									<h5 class="title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h5>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</div>