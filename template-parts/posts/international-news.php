<div class="international_news_block bg-white h-100 p-3">
	<?php $cat_id = 9; ?>
	<div class="category_item">
		<div class="cat-name">
			<a href="<?php echo get_category_link( $cat_id ); ?>"><?php echo get_cat_name( $cat_id ); ?></a>
		</div>
	</div>
	<div class="news-item-block">
		<?php 
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'cat'            => $cat_id,
			'showposts'      => '1',
			'order'          => 'DESC',
			'orderby'        => 'date'
		);
		$loop = new WP_Query($args);
		while($loop -> have_posts()):
			$loop -> the_post();
			?>
			<div class="medium_news_item">
				<div class="news_fetch">
					<a href="<?php the_permalink(); ?>">
						<figure class="image">
							<?php 
							if(has_post_thumbnail()){
								the_post_thumbnail('medium');
							}
							else{
								default_image();
							}
							?>
						</figure>
					</a>
				</div>
				<div class="title_fetch">
					<h4 class="title text-center">
						<a class="text-light" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h4>
				</div>
			</div>
			<?php
		endwhile;
		wp_reset_postdata(); ?>
		<div class="list-item-heal">
			<ul class="list-unstyled mb-0">
				<?php 
				$args = array(
					'cat' => $cat_id,
					'posts_per_page' => 3,
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$loop = new WP_Query($args);
				if($loop-> have_posts()):
					while($loop-> have_posts()):
						$loop-> the_post();
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