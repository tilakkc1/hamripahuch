<div class="recent-block">
	<div class="recent-post mb-3">
		<div class="category_item">
			<div class="cat-name">
				<span class="cat"><?php echo esc_html( 'भखरै' ); ?></span>
			</div>
		</div>
		<div class="list-item-heal">
			<ul class="list-unstyled mb-0">
				<?php 
				$args = array(
					'post_type'  => 'post',
					'posts_per_page' => 6,
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

