<footer class="colphan footer">
	<div class="footer-block text-line mt-3">
		<?php get_template_part('home-parts/footer'); ?>
		<div class="bottom-footer container-fluid py-3" style="background: #092083 !important">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="copyright text-center" style="color: rgba(255,255,255,.7);">
							&copy;
							<script>document.write(new Date().getFullYear());</script>
							<?php echo esc_html('Haropahuch सर्वाधिकार हाम्रो पहुँच बहुउद्देश्यीय सहकारी संस्था लि.') ?>
							|
							<?php echo esc_html('Powered By :') ?> <a class="text-line"
								href="https://toplinetech.com.np/?ref=haropahuch.com"
								target="_blank"><?php echo esc_html('TopLine Technology'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="return-to-top" class="btn-top" style="display: block;"><i class="fa fa-angle-double-up"></i></div>
	</div>
</footer>
</div>
<?php get_template_part('home-parts/skip-adv'); ?>
<script type='text/javascript'
	src='https://platform-api.sharethis.com/js/sharethis.js#property=6455d6ec8422190019dbb813&product=sop'
	async='async'></script>
<?php wp_footer(); ?>
</body>

</html>