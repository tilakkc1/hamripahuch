<?php
function create_radio_program_post_type()
{
    register_post_type(
        'radio_programs',
        array(
            'labels' => array(
                'name' => __('Radio Programs', 'hamropahuch'),
                'singular_name' => __('Radio Program', 'hamropahuch'),
            ),
            'menu_position' => 4,
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
            'menu_icon' => 'dashicons-microphone',
        )
    );
}
add_action('init', 'create_radio_program_post_type');


function create_team_post_type()
{
    register_post_type(
        'teams',
        array(
            'labels' => array(
                'name' => __('Team', 'hamropahuch'),
                'singular_name' => __('Team', 'hamropahuch'),
            ),
            'menu_position' => 4,
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-groups',
        )
    );
}
add_action('init', 'create_team_post_type');
