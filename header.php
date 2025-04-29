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
		<script async defer crossorigin="anonymous"src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=599268457154683&autoLogAppEvents=1"
			nonce="SH07mw6u"></script>
		<div class="header-body">
			<header class="main-head bg-white">
				<div class="container">
					<div class="logo__ad_part row mt-md-2">
						<div class="col-lg-4 col-md-4 col-sm-12 text-md-left text-center">
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
							<div class="nepali_date_item text-center mt-2">
								<?php TodaysNepaliCurrentDate(); ?>
								<i class="fa fa-clock-o ml-2" aria-hidden="true"></i><span id="clock" class="currenttime ml-1"></span>
								<script type="text/javascript">moment().format('LTS');</script>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12"></div>
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
			<script type="text/javascript">
			var nums = {
				0: '०',
				1: '१',
				2: '२',
				3: '३',
				4: '४',
				5: '५',
				6: '६',
				7: '७',
				8: '८',
				9: '९'
			};

			function startTime() {
				var today = new Date();
				var hour = today.getHours();
				var min = today.getMinutes();
				var sec = today.getSeconds();
				min = checkTime(min);
				sec = checkTime(sec);
				midday = (hour >= 12) ? "PM" : "AM";
				hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); 
				hour = convertToNepali(hour);
				min = convertToNepali(min);
				sec = convertToNepali(sec);
				document.getElementById('clock').innerHTML =
				hour + " : " + min + " : " + sec + " " +midday;
				var t = setTimeout(startTime, 500);
			}

			function checkTime(topline) {
				if (topline < 10) {
					topline = "0" + topline
				};  
				return topline;
			}

			function convertToNepali(strNum) {

				var arrNumNe = strNum.toString().split('').map(function (ch) {
					if (ch === '.' || ch === ',') {
						return ch;
					}
					return nums[Number(ch)];
				});
				return arrNumNe.join('');
			}

			document.addEventListener('DOMContentLoaded', function() {
				startTime();
			});

		</script> 