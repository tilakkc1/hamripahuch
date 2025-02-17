<?php if(is_active_sidebar( 'adv14' )): ?>
	<div class="advertisement-long mb-3 mt-4 text-center">
		<?php dynamic_sidebar('adv14'); ?>
	</div>
<?php endif; ?>
<div class="related-block small_item_list">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="category_item">
				<div class="cat-name">
					<span class="cat"><?php echo esc_html( 'सम्बन्धित समाचार' ); ?></span>
				</div>
			</div>
		</div>
		<?php 
		$id= get_the_ID(); 
		$allcat = wp_get_post_categories($id); 
		$cat_array = array_diff($allcat,array(2)); 
		$args = array(
			'showposts' => 6, 
			'cat'=>implode(',', $cat_array),
			'post__not_in'=>array($id)
		);
		$related_loop = new WP_Query( $args );
		if($related_loop -> have_posts()):
			while($related_loop -> have_posts()):
				$related_loop -> the_post();
				?>
				<div class="col-md-6 col-sm-12">
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
				</div>
				<?php 
			endwhile;
		endif;
		wp_reset_postdata(); 
		?>
	</div>
</div>