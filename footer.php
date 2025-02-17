<footer class="colphan footer">
	<div class="footer-block text-line mt-3">
		<?php get_template_part( 'home-parts/footer' ); ?>
		<div class="bottom-footer container-fluid py-3" style="background: #04578f !important">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="copyright text-center text-md-left">
							<p class="mb-0 text-line"> &copy;<script>document.write(new Date(). getFullYear());</script> <?php echo esc_html('nayakarnali.com, All Rights Reserved.') ?></p>
						</div>
					</div>
					<div class="col-md-4"></div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="powred_by text-line text-md-right text-center">
							<?php echo esc_html( 'Powered By :' ) ?> <a class="text-line" href="https://toplinetech.com.np/?ref=nayakarnali.com" target="_blank"><?php echo esc_html( 'TopLine Technology' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="return-to-top" class="btn-top" style="display: block;"><i class="fa fa-angle-double-up"></i></div>
	</div>
</footer>
</div>
<?php get_template_part( 'home-parts/skip-adv' ); ?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6455d6ec8422190019dbb813&product=sop' async='async'></script>
<?php wp_footer(); ?>
</body>
</html>