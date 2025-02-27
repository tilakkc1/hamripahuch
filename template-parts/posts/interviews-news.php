<div class="interviews-block mt-4">
	<?php $cat_id = 9; ?>
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-12">
			<div class="sports__block">
				<div class="category_item">
					<div class="cat-name">
						<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
					</div>
				</div>
				<div class="large__sports" style="background: var(--tlt-primary)">
					<div class="row">
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
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="title__sports p-5 align-self-center"
									style="max-height: 300px; overflow: hidden;">
									<div class="interview__title">
										<h2>
											<a class="text-light" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="sports_feature">
									<figure class="image mb-0">
										<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('full');
										} else {
											default_image();
										}
										?>
									</figure>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="row small__sports_item mt-3">
					<?php
					$args = array(
						'post_type' => 'post',
						'cat' => $cat_id,
						'showposts' => '4',
						'post_status' => 'publish',
						'order' => 'DESC',
						'orderby' => 'date',
						'offset' => '1',
					);
					$loop = new WP_Query($args);
					while ($loop->have_posts()):
						$loop->the_post();
						?>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="small_item_list samaj">
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
									<div class="raj_sm_title media-body font-italic">
										<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									</div>
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
		<div class="col-lg-3 col-md-3 col-sm-12">
			<?php get_template_part('template-parts/posts/blog-post'); ?>
		</div>
	</div>
	<?php if (is_active_sidebar('adv61')): ?>
		<div class="advertisement-long mt-4 text-center">
			<?php dynamic_sidebar('adv61'); ?>
		</div>
	<?php endif; ?>
</div>