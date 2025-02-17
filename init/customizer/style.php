<?php 
function custom_login_logo() {
	echo '<style type="text/css">'.
	'h1 a { 
		background-image:url('.get_template_directory_uri().'/admin/image/topline-logo.png) !important;
		height: 50px !important;
		background-size: cover !important;
		background-position: center !important;
		width: 100% !important;
	}'.
	'.login form{
		background: rgba(0,0,0,0.37) !important;
	}'.
	'#login{
		z-index: 1200 !important;
		width: 345px !important;
		position: relative !important;
	}'.
	'#login form p, .login label{
		color: #FFF !important;
	}'.
	'input#user_pass, input#user_login {
		background: radial-gradient(#dc1c1c1a, transparent) !important;
		color: #FFF !important;
	}'.
	'@media(max-width: 768px){
		body.login:before {
			content: "";
			background: rgba(0, 0, 0, 0.37);
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 92vh !important;
			z-index: 0;
		}
	}'.
	'.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
		min-height: 32px;
		line-height: 2.30769231;
		padding: 0 25px !important;
	}'.
	'.wp-core-ui .button-primary {
		background: rgba(0,0,0,0.5) !important;
		border-color: #FFFFFF !important;
		color: #fff;
		text-decoration: none;
		text-shadow: none;
	}'.
	'.login #backtoblog a, .login #nav a {
		text-decoration: none;
		color: #FFFFFF !important;
	}'.
	'.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
		background: #FFFFFF !important;
		color: #000 !important;
	}'.
	'.wp-core-ui .button, .wp-core-ui .button-secondary{
		font-size: 16px;
	}'.
	'body.login{
		background-image:url('.get_template_directory_uri().'/admin/image/background.jpg) !important;
		background-size: cover !important;
		background-color: transparent !important;
		background-repeat: no-repeat;
		position: relative;
	}'.
	'body.login:before {
		content: "";
		background: rgba(0, 0, 0, 0.37);
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100vh;
		z-index: 0;
	}'.
	'#adminmenu, #adminmenuback, #adminmenuwrap{
		background: #031f9a !important;
	}'.

	'</style>';
}
add_action( 'login_head', 'custom_login_logo' );

function custom_login_url() {
	return 'https://toplinetech.com.np';
}
add_filter( 'login_headerurl', 'custom_login_url' );
function custom_login_title() {
	return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_title' );



add_filter('admin_footer_text', 'change_text_footer_admin'); 
function change_text_footer_admin () {
	echo "Site Developed By TopLine Technology Pvt.Ltd.";
}