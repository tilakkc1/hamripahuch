<div class="py-3">
	<hr>
</div>
<div class="samaj_news_block mt-3">
	<?php $cat_id = 4; ?>
	<div class="samaj-block">
		<div class="category_item">
			<div class="cat-name">
				<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<?php
				$args = array(
					'post_type' => 'post',
					'cat' => $cat_id,
					'showposts' => '1',
					'post_status' => 'publish',
					'order' => 'DESC',
					'orderby' => 'date',
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()):
					$loop->the_post();
					?>
					<div class="raj_large_block samaj">
						<div class="feature_fetch">
							<a href="<?php the_permalink(); ?>">
								<figure class="image">
									<?php if (has_post_thumbnail()) {
										the_post_thumbnail('fill');
									} else {
										default_image();
									}
									?>
								</figure>
							</a>
						</div>
						<div class="title_fetch">
							<h3 class="title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'post',
						'cat' => $cat_id,
						'showposts' => '4',
						'post_status' => 'publish',
						'order' => 'DESC',
						'orderby' => 'date',
						'offset' => '1'
					);
					$loop = new WP_Query($args);
					while ($loop->have_posts()):
						$loop->the_post();
						?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-6">
							<div class="samaj_list_block mb-3">
								<div class="samaj__feature">
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
								<div class="smj__list__title">
									<h5>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
			<?php
			$args = array(
				'post_type' => 'post',
				'cat' => $cat_id,
				'showposts' => '2',
				'post_status' => 'publish',
				'order' => 'DESC',
				'orderby' => 'date',
				'offset' => '1'
			);
			$loop = new WP_Query($args);
			while ($loop->have_posts()):
				$loop->the_post();
				?>
				<div class="col-md-6 col-sm-12 small_item_list samaj">
					<div class="raj_news_item media">
						<div class="raj_sm_fet">
							<figure class="image">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail('small_130_90');
								} else {
									default_image();
								}
								?>
							</figure>
						</div>
						<div class="raj_sm_title media-body">
							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
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