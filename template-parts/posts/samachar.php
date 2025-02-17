<div class="new-block-data">
	<div class="news-block-grid mt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12">
					<?php $cat_id = 31; ?>
					<div class="news-box bg-white p-3 item__row">
						<div class="category_item">
							<div class="cat-name">
								<a href="<?php echo get_category_link( $cat_id ); ?>"><?php echo get_cat_name( $cat_id ); ?></a>
							</div>
						</div>
						<div class="row small__sports_item mt-3">
							<?php 
							$args = array(
								'post_type'    => 'post',
								'cat'          => $cat_id,
								'showposts'    => '12',
								'post_status'  => 'publish',
								'order'        => 'DESC',
								'orderby'      => 'date',
							);
							$loop = new WP_Query($args);
							while($loop ->have_posts()):
								$loop -> the_post();
								?>
								<div class="col-lg-3 col-md-3 col-6">
									<div class="sports__item">
										<div class="sp__item__feature">
											<figure class="image">
												<?php 
												if(has_post_thumbnail()){
													the_post_thumbnail('medium' );
												}
												else{
													default_image();
												}
												?>
											</figure>
										</div>
										<div class="sp__ttile">
											<h5 title="<?php the_title(); ?>">
												<a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a>
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
				<div class="col-md-3 col-lg-3 col-sm-12">
					<?php get_template_part('home-parts/charchit-news'); ?>
				</div>
			</div>
			<?php if(is_active_sidebar( 'adv6' )): ?>
				<div class="advertisement-long mt-4 text-center">
					<?php dynamic_sidebar('adv6'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>