<?php if(is_active_sidebar( 'adv13' )): ?>
	<div class="advertisement-long my-3 text-center">
		<?php dynamic_sidebar('adv13'); ?>
	</div>
<?php endif; ?>
<div class="comment_block">
	<div class="comment_data">
		<div class="category_item">
			<div class="cat-name">
				<span class="cat"><?php echo esc_html( 'प्रतिक्रिया दिनुहोस' ); ?></span>
			</div>
		</div>
		<div class="comment-box" style="background: rgba(255,255,255, 0.8);">
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
		</div>
	</div>
</div>