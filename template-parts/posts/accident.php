<div class="international_news_block h-100">
	<?php $cat_id = 9; ?>
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
			'showposts' => '1',
			'order' => 'DESC',
			'orderby' => 'date'
		);
		$loop = new WP_Query($args);
		while ($loop->have_posts()):
			$loop->the_post();
			?>
			<div class="medium_news_item">
				<div class="news_fetch">
					<a href="<?php the_permalink(); ?>">
						<figure class="image">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail('medium');
							} else {
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
		wp_reset_postdata();
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'cat' => $cat_id,
			'showposts' => '2',
			'order' => 'DESC',
			'orderby' => 'date',
			'offset' => '1'
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