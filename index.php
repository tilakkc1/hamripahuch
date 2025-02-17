<?php get_header(); ?>
<div class="post_listing_page py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12">
				<?php 
				while(have_posts()): the_post();
					?>
					<div class="row">
						<div class="col-md-5">
							<div class="media_feature">
								<a href="<?php the_permalink(); ?>">
									<figure class="image">
										<?php 
										if(has_post_thumbnail()){
											the_post_thumbnail( 'medium', array('class' => 'img-fluid w-100') );
										}
										else{
											default_image();
										}
										?>
									</figure>
								</a>
							</div>
						</div>
						<div class="col-md-7 text-justify">
							<div class="title">
								<h3><a href="<?php the_permalink(); ?>">
									<?php the_title(); ?></a>
								</h3>
							</div>
							<div class="expert_fetch text-justify">
								<p class="mb-0"><?php echo wp_trim_words(get_the_excerpt(), 35, '' ) ?></p>
							</div>
						</div>
					</div>
					<?php 
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php topline_pagination(); ?>
	</div>
</div>
<?php get_footer(); ?>