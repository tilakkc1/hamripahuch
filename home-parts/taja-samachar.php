<div class="taja-samachar p-3 bg-white h-100">
	<div class="cat_name_block">
		<span class="name"><?php echo esc_html( 'भर्खरै' ); ?></span>
	</div>
	<?php 
	$loop = new WP_Query(
		array(
			'post_type'       => 'post',
			'post_status'     => 'publish',
			'order'           => 'DESC',
			'orderby'         => 'date',
			'showposts'       => 5
		)
	);
	?>
	<ul class="taja__news mb-0">
		<?php 
		while($loop -> have_posts()):
			$loop -> the_post();
			?>
			<div class="published_time_ago text-muted mb-2">
				<i class="fa fa-clock-o mr-2"></i>
				<span class="text-muted"><?php echo time_ago(); ?> </span>
			</div>
			<li class="news_item">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</li>
			<?php
			wp_reset_postdata();
		endwhile;
		?>
	</ul>
</div>