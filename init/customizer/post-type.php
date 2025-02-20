<?php
function create_radio_program_post_type() {
    register_post_type('radio_programs',
        array(
            'labels'      => array(
                'name'          => __('Radio Programs', 'hamropahuch'),
                'singular_name' => __('Radio Program', 'hamropahuch'),
            ),
			'menu_position' => 4,
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'custom-fields'),
            'menu_icon'   => 'dashicons-microphone',
        )
    );
}
add_action('init', 'create_radio_program_post_type');
