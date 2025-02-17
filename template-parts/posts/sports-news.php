<div class="business-block-wrap mt-3">
	<div class="container">
		<?php $cat_id = 8; ?>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div class="sports__block p-3 bg-white h-100">
					<div class="category_item">
						<div class="cat-name">
							<a href="<?php echo get_category_link( $cat_id ); ?>"><?php echo get_cat_name( $cat_id ); ?></a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<?php 
							$args = array(
								'post_type'    => 'post',
								'cat'          => $cat_id,
								'showposts'    => '1',
								'post_status'  => 'publish',
								'order'        => 'DESC',
								'orderby'      => 'date',
							);
							$loop = new WP_Query($args);
							while($loop ->have_posts()):
								$loop -> the_post();
								?>
								<div class="raj_large_block">
									<div class="feature_fetch">
										<a href="<?php the_permalink(); ?>">
											<figure class="image">
												<?php if(has_post_thumbnail()){
													the_post_thumbnail('fill' );
												}
												else{
													default_image();
												} 
												?>
											</figure>
										</a>
									</div>
									<div class="title_fetch text-center">
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
							<div class="small_item_list">
								<?php 
								$args = array(
									'post_type'    => 'post',
									'cat'          => $cat_id,
									'showposts'    => '3',
									'post_status'  => 'publish',
									'order'        => 'DESC',
									'orderby'      => 'date',
									'offset'       => '1'
								);
								$loop = new WP_Query($args);
								while($loop ->have_posts()):
									$loop -> the_post();
									?>
									<div class="raj_news_item media">
										<div class="raj_sm_fet">
											<figure class="image">
												<?php if(has_post_thumbnail()){
													the_post_thumbnail('thumbnail' );
												}
												else{
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
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php get_template_part( 'template-parts/posts/international-news' ); ?>
			</div>
		</div>
		<?php if(is_active_sidebar( 'adv8' )): ?>
			<div class="advertisement-long mt-3 text-center">
				<?php dynamic_sidebar('adv8'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>