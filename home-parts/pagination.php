<?php 
function eng_to_nepali_number_convert($eng_num){
	$default_val = array(
		0=>'०',
		1=>'१',
		2=>'२',
		3=>'३',
		4=>'४',
		5=>'५',
		6=>'६',
		7=>'७',
		8=>'८',
		9=>'९'
	);
	$nepali_vals = '';
	$eng_num_arr = str_split($eng_num);
	$cnt = strlen($eng_num);
	for($i=0;$i<$cnt;$i++)
	{
		if(!isset($default_val[$eng_num_arr[$i]]))
		{
			$nepali_vals .= $eng_num_arr[$i];
		}
		else
			$nepali_vals .= $default_val[$eng_num_arr[$i]];
	}
	return $nepali_vals;

}
function topline_pagination($pages = '', $range = 2)
{  
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo "<div class='pagination text-center'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class='current'>".eng_to_nepali_number_convert($i)."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".eng_to_nepali_number_convert($i)."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</div>\n";
	}
}