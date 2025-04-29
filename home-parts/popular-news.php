<div class="popular-block">
	<div class="popular-post mt-3">
		<div class="category_item">
			<div class="cat-name">
				<span class="cat"><?php echo esc_html('धेरै पढिएको'); ?></span>
			</div>
		</div>
		<?php
		$pop_args = array(
			'date_query' => array(array('after' => '-15 days')),
			'showposts' => 5,
			'ignore_sticky_posts' => 1,
			'meta_key' => 'post_views',
			'orderby' => 'meta_value_num',
			'order' => 'DESC'
		);
		$count = 1;
		$nepali_number = array(
			'०.',
			'१.',
			'२.',
			'३.',
			'४.',
			'५.',
			'६.',
			'७.',
			'८.',
			'९.',
			'१०'
		);
		$the_query_loop = new WP_Query($pop_args);
		while ($the_query_loop->have_posts()):
			$the_query_loop->the_post(); ?>
			<div class="media pop-list popular-post custom-list-item">
				<figure class="numbers">
					<span class="number-count">
						<span><?php echo $nepali_number[$count]; ?></span>
					</span>
				</figure>
				<div class="media-body pop-title">
					<h5 class="ml-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h5>
				</div>
			</div>
			<?php
			$count++;
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</div>