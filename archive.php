<?php get_header(); ?>
<div class="content-list">
	<div class="post_list py-4">
		<div class="container">
			<div class="post__listing bg-white p-3">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="category_item">
							<div class="cat-name">
								<span class="cat"><?php echo single_cat_title(); ?></span>
							</div>
						</div>
					</div>
					<?php 
					while(have_posts()): the_post(); ?>
						<div class="col-lg-4 col-md-4 col-sm-12 related-block small_item_list">
							<div class="raj_news_item media">
								<div class="raj_sm_fet">
									<figure class="image">
										<?php if(has_post_thumbnail()){
											the_post_thumbnail('thumbnail' );
										}
										else{
											default_image();
										} 
										?>
									</figure>
								</div>
								<div class="raj_sm_title media-body">
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php topline_pagination(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); 