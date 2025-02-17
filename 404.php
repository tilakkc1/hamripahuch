<?php get_header(); ?>
<div class="not_found_block">
	<div class="no_post_data py-4">
		<div class="container">
			<div class="404__not_found bg-white p-3">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="not_message py-4 text-center">
							<div class="404_title">
								<h1 class="text-danger"><?php echo esc_html( 'OOPS ! 404 NOT FOUND' ) ?></h1>
							</div>
							<div class="icon py-3">
								<i class="fa fa-warning fa-5x text-danger"></i>
							</div>
							<h2 style="color: var(--tlt-orange) !important">
								<?php echo esc_html( 'तपाइले खोजेको पृष्ठ हामीले फेला पार्न सकेनौ सायद हामीले यसमा काम गर्दैछौ होला धन्यवाद' ); ?>
							</h2>
							<div class="return_home mt-5">
								<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">मुख्य पेजमा जानुहोस</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();