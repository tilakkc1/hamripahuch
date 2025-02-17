<?php 
if(is_active_sidebar( 'skipadv' )) : ?>
	<div class="modal fade modal-load" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background: rgb(238, 238, 238); display: none;" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-between d-flex">
					<div class="skip_site_logo">
						<?php
						$custom_logo = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src( $custom_logo , 'full' );
						if ( has_custom_logo()) {
							echo '<img src="'. esc_url( $logo[0] ) .'">';
						}
						else{
							echo bloginfo('name');
						}
						?>
					</div>
					<button type="button" class="btn btn-danger skip_btn" data-dismiss="modal">Skip This
					</button>
				</div>
				<div class="modal-body">
					<section class="widget text-center">
						<?php dynamic_sidebar( 'skipadv' ) ?>
					</section> 
				</div>
			</div>
		</div>
	</div>
	<?php 
endif; 
?>