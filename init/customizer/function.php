<?php
function eng_to_nepali_num_convert($eng_num)
{
	$default_val = array(
		0 => '०',
		1 => '१',
		2 => '२',
		3 => '३',
		4 => '४',
		5 => '५',
		6 => '६',
		7 => '७',
		8 => '८',
		9 => '९',
	);
	$nepali_vals = '';
	$eng_num_arr = str_split($eng_num);
	$cnt = strlen($eng_num);
	for ($i = 0; $i < $cnt; $i++) {
		if (!isset($default_val[$eng_num_arr[$i]])) {
			$nepali_vals .= $eng_num_arr[$i];
		} else
			$nepali_vals .= $default_val[$eng_num_arr[$i]];
	}
	return $nepali_vals;

}

function time_ago()
{
	return nepali_human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('अगाडी');
}
function nepali_human_time_diff($from, $to = '')
{
	if (empty($to)) {
		$to = time();
	}

	$diff = (int) abs($to - $from);

	if ($diff < HOUR_IN_SECONDS) {
		$mins = round($diff / MINUTE_IN_SECONDS);
		if ($mins <= 1)
			$mins = 1;
		$since = sprintf(_n('%s मिनेट', '%s मिनेट', eng_to_nepali_num_convert($mins)), eng_to_nepali_num_convert($mins));
	} elseif ($diff < DAY_IN_SECONDS && $diff >= HOUR_IN_SECONDS) {
		$hours = round($diff / HOUR_IN_SECONDS);
		if ($hours <= 1)
			$hours = 1;
		$since = sprintf(_n('%s घण्टा', '%s घण्टा', eng_to_nepali_num_convert($hours)), eng_to_nepali_num_convert($hours));
	} elseif ($diff < WEEK_IN_SECONDS && $diff >= DAY_IN_SECONDS) {
		$days = round($diff / DAY_IN_SECONDS);
		if ($days <= 1)
			$days = 1;
		$since = sprintf(_n('%s दिन', '%s दिन', eng_to_nepali_num_convert($days)), eng_to_nepali_num_convert($days));
	} elseif ($diff < MONTH_IN_SECONDS && $diff >= WEEK_IN_SECONDS) {
		$weeks = round($diff / WEEK_IN_SECONDS);
		if ($weeks <= 1)
			$weeks = 1;
		$since = sprintf(_n('%s हप्ता', '%s हप्ता', eng_to_nepali_num_convert($weeks)), eng_to_nepali_num_convert($weeks));
	} elseif ($diff < YEAR_IN_SECONDS && $diff >= MONTH_IN_SECONDS) {
		$months = round($diff / MONTH_IN_SECONDS);
		if ($months <= 1)
			$months = 1;
		$since = sprintf(_n('%s महिना', '%s महिना', eng_to_nepali_num_convert($months)), eng_to_nepali_num_convert($months));
	} elseif ($diff >= YEAR_IN_SECONDS) {
		$years = round($diff / YEAR_IN_SECONDS);
		if ($years <= 1)
			$years = 1;
		$since = sprintf(_n('%s वर्ष', '%s वर्ष', eng_to_nepali_num_convert($years)), eng_to_nepali_num_convert($years));
	}
	return apply_filters('human_time_diff', $since, $diff, $from, $to);
}
function set_post_views_pouplar()
{
	if (is_singular()) {
		$postID = get_the_ID();
		$count_key = 'post_views';
		$count = get_post_meta($postID, $count_key, true);
		$count = absint($count) + 1;
		update_post_meta($postID, $count_key, $count);

		$trending_key = 'daily_views' . date('Y_m_d');
		$trending_count = get_post_meta($postID, $trending_key, true);
		$trending_count = absint($trending_count) + 1;
		update_post_meta($postID, $trending_key, $trending_count);
	}
}

add_action('wp_head', 'set_post_views_pouplar');

function topline_custom_dashboard_message()
{
	global $wp_meta_boxes;

	wp_add_dashboard_widget('topline_custom_help_message', 'Theme Support', 'topline_custom_dashboard');

	$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	$my_widget = array('topline_custom_help_message' => $dashboard['topline_custom_help_message']);
	unset($dashboard['topline_custom_help_message']);

	$sorted_dashboard = array_merge($my_widget, $dashboard);
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}


function TodaysNepaliCurrentDate()
{
	$EnglishDate = date('Y-m-d');
	$DateDataArr = explode('-', $EnglishDate);
	$yy = $DateDataArr[0];
	$mm = $DateDataArr[1];
	$dd = $DateDataArr[2];
	$nepaliDate = new Nepali_Calender_Date_Data();
	$nepaliDateDataArr = $nepaliDate->eng_to_nep($yy, $mm, $dd);
	$showNepaliDate = $nepaliDate->convert_to_unicode($nepaliDateDataArr['year'], $nepaliDateDataArr['nmonth'], $nepaliDateDataArr['date'], $nepaliDateDataArr['day']);
	echo '<span class="nepalio-date text-line">' . $showNepaliDate[2] . ' ' . $showNepaliDate[1] . ' ' . $showNepaliDate[0] . ' गते ' . $showNepaliDate[3] . '</span>';
}
function post_publish_convert_date($postDate)
{
	$post_date = date('Y-m-d', strtotime($postDate));
	$DateDataArr = explode('-', $post_date);
	$year = $DateDataArr[0];
	$month = $DateDataArr[1];
	$days = $DateDataArr[2];
	$nepaliDate = new Nepali_Calender_Date_Data();
	$nepaliDateDataArr = $nepaliDate->eng_to_nep($year, $month, $days);
	$showNepaliDate = $nepaliDate->convert_to_unicode($nepaliDateDataArr['year'], $nepaliDateDataArr['nmonth'], $nepaliDateDataArr['date'], $nepaliDateDataArr['day']);

	print_r($showNepaliDate[2] . ' ' . $showNepaliDate[1] . ' ' . $showNepaliDate[0] . ' गते ' . $showNepaliDate[3]);
}

function post_tag_menu_list()
{
	global $post; // Add this line
	$tags = get_the_tags($post->ID);
	if ($tags) {
		foreach ($tags as $tag) {
			$tag_id = $tag->term_id;
			echo '
            <li class="tag-token-text tag-item-' . $tag_id . '"> 
            <a class="btn-link" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>
            </li>';
		}
	}
}


function topline_custom_dashboard()
{
	echo '<p>Welcome To Hamro Pahuch - By TopLine Technology Pvt.Ltd. ! You Can Change The Site Logo With The <a href="' . site_url('/wp-admin/customize.php') . '">Theme Option</a> And Go To The <b>Site Identity</b>,  You Can Customize Theme With The <a href="' . site_url('/wp-admin/customize.php') . '">Theme Customize</a> And You Can Place The Advertisement With The <a href="' . site_url('/wp-admin/widgets.php') . '">Theme Wedgets</a>. Need Help? Contact The Developer <a href="mailto:support@toplinetech.com.np">Here</a>. </p>';
}

add_action('wp_dashboard_setup', 'topline_custom_dashboard_message');
if (function_exists('acf_add_local_field_group')):
	acf_add_local_field_group(array(
		'key' => 'group_60cc20c3727c63',
		'title' => 'Meta Box',
		'fields' => array(
			array(
				'key' => 'field_60cc3d26788833',
				'label' => 'Sub Title',
				'name' => 'sub_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Enter Sub Title Here...',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60cc219c1d5c43',
				'label' => 'Writer Name',
				'name' => 'writer_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'हाम्रो पहुँच',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60d2e4e84c5043',
				'label' => 'Writer Image',
				'name' => 'writer_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_60d2e496867793',
				'label' => 'Feature Title',
				'name' => 'feature_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Enter Banner Feature Title',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60cc20c837af33',
				'label' => 'Banner News',
				'name' => 'banner_news',
				'type' => 'checkbox',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Banner' => 'Banner',
					'With Image' => 'With Image',
				),
				'allow_custom' => 0,
				'default_value' => array(
					0 => 'With Image',
				),
				'layout' => 'vertical',
				'toggle' => 0,
				'return_format' => 'value',
				'save_custom' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => false,
	));

	acf_add_local_field_group(array(
		'key' => 'group_60cf0163e1b23',
		'title' => 'Video Meta Box',
		'fields' => array(
			array(
				'key' => 'field_60cf017d65bbc3',
				'label' => 'Video ID',
				'name' => 'video_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Enter YouTube Video ID',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'video',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => false,
	));
	acf_add_local_field_group(array(
		'key' => 'group_62e3db8ddb7c5',
		'title' => 'User Meta',
		'fields' => array(
			array(
				'key' => 'field_62e3db9ebe99f',
				'label' => 'Writer Image',
				'name' => 'author_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_62e3e21d891cc',
				'label' => 'Facebook Url',
				'name' => 'facebook_url',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Enter Reporter Facebook Profile',
			),
			array(
				'key' => 'field_62e3e258891cd',
				'label' => 'Twitter Url',
				'name' => 'twitter_url',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Enter Author Twitter Profile Url',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'user_role',
					'operator' => '==',
					'value' => 'all',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
endif;
add_action('acf/include_fields', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group(array(
		'key' => 'group_67b705987ff77',
		'title' => 'Radio Schedule',
		'fields' => array(
			array(
				'key' => 'field_67b705983bfa6',
				'label' => 'Program Start Time',
				'name' => 'program_time_1',
				'aria-label' => '',
				'type' => 'time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'g:i a',
				'return_format' => 'g:i a',
				'allow_in_bindings' => 0,
			),
			array(
				'key' => 'field_67b705983bfa64',
				'label' => 'Program End Time',
				'name' => 'program_time_2',
				'aria-label' => '',
				'type' => 'time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'g:i a',
				'return_format' => 'g:i a',
				'allow_in_bindings' => 0,
			),
			array(
				'key' => 'field_67b705af3bfa7',
				'label' => 'presenter_name',
				'name' => 'presenter_name',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'allow_in_bindings' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_67b705c33bfa8',
				'label' => 'contact_number',
				'name' => 'contact_number',
				'aria-label' => '',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'min' => '',
				'max' => '',
				'allow_in_bindings' => 0,
				'placeholder' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'radio-programs',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
});

