<div class="postpati_tv_studio">
	<div class="postpati_studio_box mt-3">
		<div class="box_wrapper bg-dark">
			<div class="category_item">
				<div class="cat-name">
					<a href="<?php echo site_url(); ?>/video-content/video"><?php echo esc_html('भिडियो'); ?>
				</div>
			</div>
			<div class="video__block">
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'video',
						'showposts' => '4',
						'post_status' => 'publish',
						'order' => 'DESC',
						'orderby' => 'date',
					);
					$loop = new WP_Query($args);
					if ($loop->have_posts()):
						while ($loop->have_posts()):
							$loop->the_post();
							?>
							<div class="col* col-lg-3 col-sm-12 col-md-3">
								<div class="video-block">
									<div class="video_list">
										<iframe width="100%" height="300"
											src="https://www.youtube.com/embed/<?php echo the_field('video_link'); ?>"
											frameborder="0"
											allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
											allowfullscreen></iframe>
									</div>
									<div class="video_title">
										<h5 class="text-light">
											<?php the_title(); ?>
										</h5>
									</div>
								</div>
							</div>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</div>