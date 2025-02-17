<div class="pradesh-news-list">
	<?php $cat_id = 89; ?>
	<div class="pradesh-block">
		<div class="row">
			<?php 
			$args = array(
				'post_type'    => 'post',
				'cat'          => $cat_id,
				'showposts'    => '4',
				'post_status'  => 'publish',
				'order'        => 'DESC',
				'orderby'      => 'date',
			);
			$loop = new WP_Query($args);
			while($loop -> have_posts()):
				$loop -> the_post();
				?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="enter-big-box">
						<div class="enter-big-grid">
							<a href="<?php the_permalink(); ?>">
								<figure class="image">
									<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail('full' );
									}
									else{
										default_image();
									}
									?>
								</figure>
							</a>
						</div>
						<div class="ent_side_title">
							<h5 class="title">
								<a class="text-light" href="<?php the_permalink(); ?>">
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