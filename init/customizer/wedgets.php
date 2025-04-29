<?php
function hamropahuch_widgets_init_setup()
{
	register_sidebar(array(
		'name' => esc_html__('साइडबार', 'hamropahuch'),
		'id' => 'sidebar',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन लोगोको दायातिर', 'hamropahuch'),
		'id' => 'ad1',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन ब्यानरको माथि', 'hamropahuch'),
		'id' => 'adv1',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन ब्यानरको तल', 'hamropahuch'),
		'id' => 'adv2',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन समाचार भन्दा तल', 'hamropahuch'),
		'id' => 'adv3',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन समाचारको दायाँ तिर', 'hamropahuch'),
		'id' => 'adv4',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन राजनीतिको तल', 'hamropahuch'),
		'id' => 'adv5',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन समाजको तल', 'hamropahuch'),
		'id' => 'adv6',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन अन्तर्वार्ताको तल', 'hamropahuch'),
		'id' => 'adv61',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन मनोरन्जनको तल', 'hamropahuch'),
		'id' => 'adv7',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन खेलकुदको तल', 'hamropahuch'),
		'id' => 'adv8',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन सिङ्गलको शिर्षकको माथि', 'hamropahuch'),
		'id' => 'adv11',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => esc_html__('विज्ञापन सिङ्गलको कन्टेन्टको माथि', 'hamropahuch'),
		'id' => 'adv12',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन कमेन्ट भन्दा माथि', 'hamropahuch'),
		'id' => 'adv13',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन सम्बन्धित भन्दा माथि', 'hamropahuch'),
		'id' => 'adv14',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन दोस्रो प्याराग्राफको तल', 'hamropahuch'),
		'id' => 'insidec2',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन तेस्रो प्याराग्राफको तल', 'hamropahuch'),
		'id' => 'insidec3',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन चौथो प्याराग्राफको तल', 'hamropahuch'),
		'id' => 'insidec4',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('विज्ञापन स्किप गर्न मिल्ने', 'hamropahuch'),
		'id' => 'skipadv',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('टिम राख्न', 'hamropahuch'),
		'id' => 'team',
		'description' => esc_html__('Add widgets here.', 'hamropahuch'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'hamropahuch_widgets_init_setup');
