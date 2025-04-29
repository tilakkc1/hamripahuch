<div class="technology_news mt-4">
	<div class="tech-block son__headline">
		<?php $cat_id = 24; ?>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="category_item">
					<div class="cat-name">
						<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
					</div>
				</div>
			</div>
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
				<div class="col-lg-3 col-md-3 col-6 col-sm-12">
					<div class="thulo__son__item mb-3">
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