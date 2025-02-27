<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>
		<?= wp_title('&laquo;', true, 'right') ?>
		<?= bloginfo('name') ?>
	</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bodysection'); ?>>
	<div class="black__layer" style="display: none;"></div>
	<div class="wrapper_block" id="main">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous"
			src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=599268457154683&autoLogAppEvents=1"
			nonce="SH07mw6u"></script>
		<div class="header-body">
			<header class="main-head bg-white">
				<div class="container">
					<div class="logo__ad_part row mt-md-2">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="logo_parts">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php
									$custom_logo = get_theme_mod('custom_logo');
									$logo = wp_get_attachment_image_src($custom_logo, 'full');
									if (has_custom_logo()) {
										echo '<img class="img-fluid" src="' . esc_url($logo[0]) . '">';
									} else {
										echo bloginfo('name');
									}
									?>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12"></div>
						<div class="col-lg-7 col-md-7 col-sm-12 d-md-block d-none">
							<?php if (is_active_sidebar('ad1')): ?>
								<div class="advertisement-long mt-2">
									<?php dynamic_sidebar('ad1') ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</header>
			<div class="menu-part">
				<?php get_template_part('template-parts/header/navigation'); ?>
				<?php get_template_part('template-parts/header/mobile-nav'); ?>
			</div>
		</div>