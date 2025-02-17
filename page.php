<?php get_header(); ?>
<section class="single-block py-5">
	<div <?php post_class('single_post') ?>>
		<div class="container" id="contentID-<?php the_ID() ?>">
			<?php 
			while(have_posts()): the_post(); ?>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<div class="content mb-3">
							<div class="page_title" style="border-bottom: 1px #ddd solid; margin-bottom: 10px">
								<h3><?php the_title(); ?></h3>
							</div>
							<?php the_content(); ?>
						</div>
						<?php comments_template() ?>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php get_footer();