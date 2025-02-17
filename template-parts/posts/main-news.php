<div class="news-block-main mt-3">
	<div class="container">
		<?php $cat_id = 2; ?>
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="main-block bg-white p-3">
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="category_item">
								<div class="cat-name">
									<a href="<?php echo get_category_link( $cat_id ); ?>"><?php echo get_cat_name( $cat_id ); ?></a>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
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
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="small_item_list">
								<?php 
								$args = array(
									'post_type'    => 'post',
									'cat'          => $cat_id,
									'showposts'    => '4',
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
				<?php if(is_active_sidebar( 'adv3' )): ?>
					<div class="advertisement-long mt-4 text-center">
						<?php dynamic_sidebar('adv3'); ?>
					</div>
				<?php endif; ?>
				<section class="samaj-tradind-section">
					<?php get_template_part( 'template-parts/posts/samaj-news' ); ?>
				</section>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="side_block bg-white p-2 side-sticky">
					<?php if(is_active_sidebar( 'adv4' )): ?>
						<div class="advertisement">
							<?php dynamic_sidebar('adv4'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if(is_active_sidebar( 'adv6' )): ?>
			<div class="advertisement-long mt-4 text-center">
				<?php dynamic_sidebar('adv6'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>