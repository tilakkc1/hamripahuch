<div class="popular-block h-100">
	<div class="popular-post bg-white p-3 h-100 push-0">
		<div class="category_item">
			<div class="cat-name">
				<span class="cat"><?php echo esc_html( 'टप फाइभ' ); ?></span>
			</div>
		</div>
		<?php 
		$today = getdate();
		$trending_key = 'daily_views'.date('Y_m_d');
		$tranding_args = array(
			'meta_key'     => $trending_key,
			'meta_compare' => '>=',
			'orderby'    => 'meta_value_num',
			'posts_per_page' => 5,
			'ignore_sticky_posts' => 1,
		);
		$tranding_loop = new WP_Query( $tranding_args );
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
		while($tranding_loop->have_posts()): $tranding_loop->the_post(); ?>
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