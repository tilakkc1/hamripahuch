<div class="top-footer-block container-fluid" style="background: var(--tlt-primary);">
	<div class="footer_block py-5">
		<a href=""></a>
		<div class="container">
			<div class="footer-block-full">
				<div class="footer-content">
					<div class="footer_title font-weight-bold" style="font-size: 18px"><?php echo get_theme_mod( 'company_name' ); ?></div>
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li><i class="fa fa-map-marker mr-2" aria-hidden="true"></i><?php echo get_theme_mod( 'media_address' ); ?></li>
							<li><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo get_theme_mod( 'contact_number' ); ?></li>
							<li><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i><?php echo get_theme_mod('email_fields') ?></a></li>
							<li>सूचना विभाग दर्ता नं. <?php echo get_theme_mod( 'reg_number' ); ?></li>
						</ul>
					</div>
				</div>
				<div class="footer-content">
					<div class="footer_title font-weight-bold" style="font-size: 18px">विज्ञापनको लागि</div>
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li><i class="fa fa-phone mr-2" aria-hidden="true"></i>९८६८३३६१८२</li>
							<li><i class="fa fa-envelope-o mr-2"></i>mkt.kunwarmana@gmail.com</li>
						</ul>
					</div>
				</div>
				<div class="footer-content">
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li class="font-weight-bold">प्रधान सम्पादक</li>
							<li>मान बहादुर कुँवर</li>
							<li>सम्वाददाता</li>
							<li>अर्जुन महातारा</li>
						</ul>
					</div>
				</div>
				<div class="footer-content">
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li class="font-weight-bold">कार्यकारी सम्पादक</li>
							<li>नवराज नेपाली</li>
							<li>सल्लाहकार</li>
							<li>हरि बहादुर कुँवर</li>
						</ul>
					</div>
				</div>
				<div class="footer-content">
					<div class="footer_list">
						<ul class="list-unstyled mb-0">
							<li><a href="#">हाम्रो बारेमा</a></li>
							<li><a href="#">हाम्रो टीम</a></li>
							<li><a href="#">सम्पर्क</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="media-part text-center text-md-left">
				<ul class="social-icons list-unstyled mb-0 pt-0 text-line">
					<?php if(get_theme_mod('facebook_url')): ?>
						<li class="item">
							<a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="fa fa-facebook mr-2"></i>Facebook</a>
						</li>
					<?php endif; ?>
					<?php if(get_theme_mod('twitter_url')): ?>
						<li class="item">
							<a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="fa fa-twitter mr-2"></i>Twitter</a>
						</li>
					<?php endif; ?>
					<?php if(get_theme_mod('youtube_url')): ?>
						<li class="item">
							<a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><i class="fa fa-youtube mr-2"></i>YouTube</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>