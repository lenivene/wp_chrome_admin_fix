<?php
function chromefix_admin_init(){
	if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false ) {
		add_action('admin_enqueue_scripts', 'chromefix_inline_css');
	}
}
function chromefix_inline_css(){
	wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}

add_action( 'admin_init', 'chromefix_admin_init' );