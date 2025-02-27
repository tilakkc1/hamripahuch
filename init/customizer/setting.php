<?php
function hamropahuch_header_customizer($wp_customize)
{
	$wp_customize->add_panel(
		'header_panel',
		array(
			'title' => 'Header Setting',
			'description' => 'Panel description',
			'priority' => 41
		)
	);

	$wp_customize->add_section(
		'header_section',
		array(
			'title' => 'Header Section',
			'priority' => 410,
			'panel' => 'header_panel',
		)
	);
	$wp_customize->add_setting(
		'facebook_url',
		array(
			'default' => 'http://www.facebook.com/url',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'facebook_url',
		array(
			'label' => 'Add Facebook Url',
			'section' => 'header_section',
			'type' => 'url',
		)
	);
	$wp_customize->add_setting(
		'twitter_url',
		array(
			'default' => 'http://www.twitter.com/url',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'twitter_url',
		array(
			'label' => 'Add Twitter Url',
			'section' => 'header_section',
			'type' => 'url',
		)
	);
	$wp_customize->add_setting(
		'instagram_url',
		array(
			'default' => 'http://www.instagram.com/url',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'instagram_url',
		array(
			'label' => 'Add Instagram Url',
			'section' => 'header_section',
			'type' => 'url',
		)
	);
	$wp_customize->add_setting(
		'youtube_url',
		array(
			'default' => 'http://www.youtube.com/url',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'youtube_url',
		array(
			'label' => 'Add youtube Url',
			'section' => 'header_section',
			'type' => 'url',
		)
	);

}
add_action('customize_register', 'hamropahuch_header_customizer');


function hamropahuch_footer_customizer($wp_customize)
{
	$wp_customize->add_panel(
		'footer_panel',
		array(
			'title' => 'Footer Setting',
			'priority' => 42
		)
	);

	$wp_customize->add_section(
		'footer_section',
		array(
			'title' => 'Footer Section',
			'priority' => 410,
			'panel' => 'footer_panel',
		)
	);
	$wp_customize->add_setting(
		'company_name',
		array(
			'default' => 'कम्पनीको नाम प्रालि',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'company_name',
		array(
			'label' => 'कम्पनीको नाम',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'media_address',
		array(
			'default' => 'मिडिया रहेको ठेगाना',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'media_address',
		array(
			'label' => 'मिडिया ठेगाना',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'contact_number',
		array(
			'default' => '+९७७-००००००००००',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'contact_number',
		array(
			'label' => 'सम्पर्क नम्बर',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'email_fields',
		array(
			'default' => 'example@email.com',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'email_fields',
		array(
			'label' => 'इमेल',
			'section' => 'footer_section',
			'type' => 'email',
		)
	);
	$wp_customize->add_setting(
		'reg_number',
		array(
			'default' => '००/०७९-०८०',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'reg_number',
		array(
			'label' => 'सूचना विभाग दर्ता नं',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'preg_number',
		array(
			'default' => '००/०८०-०८१',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'preg_number',
		array(
			'label' => 'प्रेस काउन्सिल सूचिकृत',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
}
add_action('customize_register', 'hamropahuch_footer_customizer');
function sanitize_checkbox($checked)
{

	return (isset($checked) && $checked == true) ? true : false;
}

function hamropahuch_radio_panel($wp_customize)
{
	// Add Customizer Panel
	$wp_customize->add_panel(
		'radio_panel',
		array(
			'title' => __('Radio Banner Setting', 'mytheme'),
			'description' => __('Panel description', 'mytheme'),
			'priority' => 42
		)
	);

	// Add Section (Fix Conflict: Different Name Used)
	$wp_customize->add_section(
		'radio_banner_section',
		array(
			'title' => __('Banner Section', 'mytheme'),
			'priority' => 411,
			'panel' => 'radio_panel',
		)
	);

	// Checkbox Setting (Enable Facebook Live)
	$wp_customize->add_setting(
		'check_url',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'check_url',
		array(
			'label' => __('Facebook Live', 'mytheme'),
			'section' => 'radio_banner_section', // ✅ Fixed Section Name
			'type' => 'checkbox',
		)
	);

	// Video URL Input
	$wp_customize->add_setting(
		'video_url',
		array(
			'default' => 'http://www.facebook.com/url',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'video_url',
		array(
			'label' => __('Add Video Live URL', 'mytheme'),
			'section' => 'radio_banner_section', // ✅ Fixed Section Name
			'type' => 'text',
		)
	);
}

add_action('customize_register', 'hamropahuch_radio_panel');
