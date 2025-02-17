<div class="col-lg-9 col-md-9 col-sm-12">
	<?php get_template_part( 'template-parts/heading-content' ); ?>
	<article class="content-block">
		<div class="content text-justify">
			<div class="feature_image mb-3">
				<?php the_post_thumbnail( 'full', array('class' => 'img-fluid w-100') ); ?>
			</div>
			<?php if(is_active_sidebar( 'adv12' )): ?>
				<div class="advertisement-long my-2 text-center">
					<?php dynamic_sidebar('adv12'); ?>
				</div>
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
		<div class="components_token tag_menu">
			<ul class="token-tag tag_item mb-0 list-unstyled">
				<?php post_tag_menu_list(); ?>
			</ul>
		</div>
			<?php 
		$user_id = get_the_author_meta('ID');
		$user_image = false;
		$description = get_the_author_meta('description');
		if (function_exists('get_field')) {
			$attachment_id = get_field('author_image', 'user_'.$user_id);
		} 
		if(get_field('writer_name')){

		}
		else{ ?>
			<div class="content-author mb-30 d-flex">
				<div class="content-author-image image-size">
					<img alt="<?php echo get_the_author(); ?>" class="img-fluid" src="<?php echo $attachment_id; ?>">
				</div>
				<div class="content-author-info">
					<div class="content-author-name">
						<span><?php echo get_the_author(); ?></span>
						<a target="_blank" href="<?php echo get_author_posts_url($user_id ); ?>">
							<p style="font-size: 18px;"><?php echo esc_html('लेखकबाट थप...'); ?></p>
						</a>
					</div>
				</div>
			</div>
		<?php }
		?>
		<div class="published-date my-3">
			<span class="pub-date text-muted"><i class="fa fa-calendar mr-2"></i>प्रकाशित मिति : <?php post_publish_convert_date(get_the_date('', get_the_ID())); ?></span>
		</div>
	</article>