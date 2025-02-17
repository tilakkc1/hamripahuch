<?php get_header(); ?>
<section class="ut__archive_block">
	<div class="news_list_box my-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12">
					<div class="row bg-white m-0 p-3 mb-3">
						<?php 
						$user_id = get_the_author_meta('ID');
						$user_image = false;
						$description = get_the_author_meta('description');
						if (function_exists('get_field')) {
							$attachment_id = get_field('author_image', 'user_'.$user_id);
							$facebook_url = get_field('facebook_url',  'user_'.$user_id);
							$twitter_url = get_field('twitter_url',  'user_'.$user_id);
						} 
						?>
						<div class="col-md-2 col-4">
							<img class="img-fluid" style="object-fit: cover;width: 150px;height: 150px;border-radius: 50%; border: 5px #CCC solid;" src="<?php echo $attachment_id; ?>">
						</div>
						<div class="col-md-10 col-8">
							<h4><?php echo get_the_author(); ?></h4>
							<p style="font-size: 20px"><?php echo $description; ?></p>
							<div class="social__data_icon d-block">
								<ul class="list-unstyled mt-3">
									<li style="background: #3b5998"><a href="<?php echo $facebook_url; ?>" target="_blank"><i class="fa fa-facebook ml-1"></i></a></li>
									<li class="ml-2" style="background: #00acee"><a href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php 
				while(have_posts()): the_post(); ?>
					<div class="col-lg-4 col-md-4 col-sm-6 grid_four_fet clearfix mb-2 small_item_list">
						<div class="raj_news_item media bg-white p-3">
							<div class="raj_sm_fet">
								<figure class="image mb-0">
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
					<?php
				endwhile;
				?>
			</div>
			<?php topline_pagination(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>