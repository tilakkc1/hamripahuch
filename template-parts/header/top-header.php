<div class="top-header-block" style="padding: 3px 0; background: var(--tlt-primary)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="left-block">
					<?php TodaysNepaliCurrentDate(); ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="media-part text-md-right text-center">
					<ul class="social-icons list-unstyled mb-0 pt-0 text-line">
						<li class="item">
							<a href="<?php echo site_url() ?>/about-us"><i class="fa fa-file-picture-o mr-2"></i>हाम्रो बारेमा</a>
						</li>
						<?php if(get_theme_mod('facebook_url')): ?>
							<li class="item">
								<a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="fa fa-facebook"></i></a>
							</li>
						<?php endif; ?>
						<?php if(get_theme_mod('twitter_url')): ?>
							<li class="item">
								<a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="fa fa-twitter"></i></a>
							</li>
						<?php endif; ?>
						<?php if(get_theme_mod('youtube_url')): ?>
							<li class="item">
								<a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><i class="fa fa-youtube"></i></a>
							</li>
						<?php endif; ?>
						<li class="item">
							<div class="search-toggle">
								<span class="search-icon icon-search"><i class="fa fa-fw fa-search"></i></span>
								<span class="search-icon icon-close"><i class="fa fa-fw  fa-close"></i></span>
							</div>
						</li>
					</ul>
				</div>
				<div class="search-box desktop-search">
					<div class="search-container">
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<input type="text" value="<?php echo get_search_query() ?>" name="s" id="search-terms" placeholder="खोजि गर्न नेपालीमा नै टाईप् गर्नुहोस" />
							<button type="submit" class="search-icon"></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>