<div class="news-block-main mt-4">
	<?php $cat_id = 16; ?>
	<div class="entertainment-block p-3" style="background: #314252">
		<div class="enter_body">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="category_item">
						<div class="cat-name">
							<a href="<?php echo get_category_link($cat_id); ?>"
								style="color: var(--tlt-white) !important"><?php echo get_cat_name($cat_id); ?></a>
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
					<div class="col-md-3 col-sm-6">
						<div class="enter-big-box">
							<div class="enter-big-grid">
								<a href="<?php the_permalink(); ?>">
									<figure class="image">
										<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('full');
										} else {
											default_image();
										}
										?>
									</figure>
								</a>
							</div>
							<div class="feature_icon">
								<i class="fa fa-file-image-o" aria-hidden="true"></i>
							</div>
							<div class="ent_side_title">
								<h4 class="title">
									<a class="text-light" href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
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