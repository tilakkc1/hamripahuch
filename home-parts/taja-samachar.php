<div class="taja-samachar p-2">
	<?php
	$loop = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => 'DESC',
			'orderby' => 'date',
			'showposts' => 5
		)
	);
	?>
	<ul class="taja__news mb-0">
		<?php
		while ($loop->have_posts()):
			$loop->the_post();
			?>
			<div class="published_time_ago text-light mb-2">
				<i class="fa fa-clock-o mr-2"></i>
				<span class="text-light" style="font-size: 12px !important;"><?php echo time_ago(); ?> </span>
			</div>
			<li class=" news_item" style="font-size: 19px !important;">
				<a class="text-light" href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</li>
			<?php
			wp_reset_postdata();
		endwhile;
		?>
	</ul>
</div>
<style>
	.taja-samachar {
		padding: 20px;
		background: rgba(255, 255, 255, 0.05);
		border: 1px solid rgba(255, 255, 255, 0.15);
		max-height: 380px;
		overflow-y: auto;
		scrollbar-color: #0345a9;
		border-radius: 4px;
	}

	.taja-samachar::-webkit-scrollbar {
		width: 3px;
	}

	.taja-samachar::-webkit-scrollbar-track {
		background-color: transparent;
		border-radius: 4px;
	}

	.taja-samachar::-webkit-scrollbar-thumb {
		background-color: #fff;
		border-radius: 4px;
	}
</style>