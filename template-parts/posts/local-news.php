<div class="news-block-wrap mt-3">
	<div class="row">
		<?php $cat_id = 11; ?>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="main-block h-100">
				<div class="category_item">
					<div class="cat-name">
						<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-7 col-sm-12">
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
							<div class="raj_large_block">
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
								<div class="title_fetch text-center">
									<h2 class="title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="small_item_list">
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
								<div class="raj_news_item media">
									<div class="raj_sm_fet">
										<figure class="image">
											<?php if (has_post_thumbnail()) {
												the_post_thumbnail('thumbnail');
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
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					</div>
					<div class="col-lg-3 col-md-5 col-sm-12">
						<div class="list-item-heal">
							<ul class="list-unstyled mb-0">
								<?php
								$args = array(
									'cat' => $cat_id,
									'posts_per_page' => 6,
									'post_status' => 'publish',
									'orderby' => 'date',
									'order' => 'DESC',
									'offset' => 5,
								);
								$loop = new WP_Query($args);
								if ($loop->have_posts()):
									while ($loop->have_posts()):
										$loop->the_post();
										?>
										<li>
											<div class="title-hel">
												<a href="<?php the_permalink(); ?>">
													<h5><?php the_title(); ?></h5>
												</a>
											</div>
										</li>
										<?php
									endwhile;
								endif;
								wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (is_active_sidebar('adv5')): ?>
		<div class="advertisement-long mt-4 text-center">
			<?php dynamic_sidebar('adv5'); ?>
		</div>
	<?php endif; ?>
</div>