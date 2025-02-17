<?php 
function naya_karnali_widgets_init_setup() {
	register_sidebar( array(
		'name'          => esc_html__( 'साइडबार', 'naya_karnali' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन लोगोको दायातिर', 'naya_karnali' ),
		'id'            => 'ad1',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन ब्यानरको माथि', 'naya_karnali' ),
		'id'            => 'adv1',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन ब्यानरको तल', 'naya_karnali' ),
		'id'            => 'adv2',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन मुख्य समाचार भन्दा तल', 'naya_karnali' ),
		'id'            => 'adv3',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन मुख्य समाचारको दायाँ तिर', 'naya_karnali' ),
		'id'            => 'adv4',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन राजनीतिको तल', 'naya_karnali' ),
		'id'            => 'adv5',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन समाजको तल', 'naya_karnali' ),
		'id'            => 'adv6',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन अन्तर्वार्ताको तल', 'naya_karnali' ),
		'id'            => 'adv61',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन मनोरन्जनको तल', 'naya_karnali' ),
		'id'            => 'adv7',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन खेलकुदको तल', 'naya_karnali' ),
		'id'            => 'adv8',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन सिङ्गलको शिर्षकको माथि', 'naya_karnali' ),
		'id'            => 'adv11',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन सिङ्गलको कन्टेन्टको माथि', 'naya_karnali' ),
		'id'            => 'adv12',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन कमेन्ट भन्दा माथि', 'naya_karnali' ),
		'id'            => 'adv13',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन सम्बन्धित भन्दा माथि', 'naya_karnali' ),
		'id'            => 'adv14',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन दोस्रो प्याराग्राफको तल', 'naya_karnali' ),
		'id'            => 'insidec2',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'विज्ञापन स्किप गर्न मिल्ने', 'naya_karnali' ),
		'id'            => 'skipadv',
		'description'   => esc_html__( 'Add widgets here.', 'naya_karnali' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'naya_karnali_widgets_init_setup' );
