<?php get_header(); ?>
<section class="single-block py-3">
	<div <?php post_class('single_post') ?>>
		<div class="container" id="contentID-<?php the_ID() ?>">
			<div class="content__blcck">
				<?php if (is_active_sidebar('adv11')): ?>
					<div class="advertisement-long my-3 text-center">
						<?php dynamic_sidebar('adv11'); ?>
					</div>
				<?php endif; ?>
				<div class="row">
					<?php
					while (have_posts()):
						the_post();
						?>
						<?php get_template_part('template-parts/heading-content'); ?>
						<?php get_template_part('template-parts/content', get_post_format()); ?>
						<?php
					endwhile; ?>
					<?php comments_template() ?>
					<?php get_template_part('home-parts/related-news'); ?>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<button class="play-pause-btn fixed" style="position: fixed; right: 0; top: 50%; z-index: 999;">
		<i class="fa fa-play"></i>
	</button>
	<audio id="radio-player" src="https://live.itech.host:8693/stream"></audio>
</section>
<?php get_footer();