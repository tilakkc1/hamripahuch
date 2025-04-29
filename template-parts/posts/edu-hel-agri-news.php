<div class="new-block-data">
	<div class="news-block-grid mt-4">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php $cat_id = 15; ?>
				<div class="news-box item__row">
					<div class="category_item">
						<div class="cat-name">
							<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
						</div>
					</div>
					<div class="news-item-block">
						<?php
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => $cat_id,
							'showposts' => '3',
							'order' => 'DESC',
							'orderby' => 'date',
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()):
							$loop->the_post();
							?>
							<div class="small-item media">
								<div class="small-feature">
									<figure class="image">
										<?php if (has_post_thumbnail()) {
											the_post_thumbnail('thumbnail');
										} else {
											default_image();
										}
										?>
									</figure>
								</div>
								<div class="media-body title ml-3">
									<h5 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php $cat_id = 21; ?>
				<div class="news-box item__row">
					<div class="category_item">
						<div class="cat-name">
							<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
						</div>
					</div>
					<div class="news-item-block">
						<?php
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => $cat_id,
							'showposts' => '3',
							'order' => 'DESC',
							'orderby' => 'date',
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()):
							$loop->the_post();
							?>
							<div class="small-item media">
								<div class="small-feature">
									<figure class="image">
										<?php if (has_post_thumbnail()) {
											the_post_thumbnail('thumbnail');
										} else {
											default_image();
										}
										?>
									</figure>
								</div>
								<div class="media-body title ml-3">
									<h5 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php $cat_id = 18; ?>
				<div class="news-box bg-white item__row">
					<div class="category_item">
						<div class="cat-name">
							<a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
						</div>
					</div>
					<div class="news-item-block">
						<?php
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => $cat_id,
							'showposts' => '3',
							'order' => 'DESC',
							'orderby' => 'date',
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()):
							$loop->the_post();
							?>
							<div class="small-item media">
								<div class="small-feature">
									<figure class="image">
										<?php if (has_post_thumbnail()) {
											the_post_thumbnail('thumbnail');
										} else {
											default_image();
										}
										?>
									</figure>
								</div>
								<div class="media-body title ml-3">
									<h5 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>
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
		<?php if (is_active_sidebar('adv18')): ?>
			<div class="advertisement-long mt-2 text-center">
				<?php dynamic_sidebar('adv18'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>