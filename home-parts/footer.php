<div class="top-footer-block container-fluid"
	style="background: var(--tlt-primary); border-top: 4px double var(--tlt-secondary);">
	<div class="footer_block py-5">
		<a href=""></a>
		<div class="container">
			<div class="footer-block-container row text-center text-md-left">
				<div class="footer-content col-md-4">
					<div class="footer_title font-weight-bold red" style="font-size: 20px">
						<?php echo get_theme_mod('company_name'); ?>
					</div>
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li><?php echo esc_html('www.hamropahuch.com') ?></li>
							<li>सूचना विभाग दर्ता नं.: <?php echo get_theme_mod('reg_number'); ?></li>
							<li>प्रेस काउन्सिल सूचिकृत: <?php echo get_theme_mod('preg_number') ?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<ul class="list-unstyled team-name mb-0">
								<li>
									<i class="fa fa-map-marker mr-3"></i> <?php echo get_theme_mod('media_address'); ?>
								</li>
								<li>
									<i class="fa fa-phone mr-3"
										aria-hidden="true"></i><span><?php echo get_theme_mod('contact_number'); ?></span>
								</li>
								<li>
									<i class="fa fa-envelope mr-3"></i>
									<?php echo get_theme_mod('email_fields') ?>
								</li>
								<li>
									<strong class="red">विज्ञापनका लागि</strong> : ०८२-५२१३७४
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 team-name_list">
							<address>
								<ul class="list-unstyled team-name">
									<?php dynamic_sidebar('team'); ?>
								</ul>
								<ul class="list-unstyled quick_link mb-0">
								<li>
								    <a href="<?php echo site_url() ?>/our-team">हाम्रो टिम</a>
								</li>
								<li>
								    <a href="<?php echo site_url() ?>/about-us">हाम्रो बारेमा </a>
								</li>
							</ul>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>