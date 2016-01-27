<?php
/*
Plugin Name: Jeba Ajax Mailchimp 
Plugin URI: http://prowpexpert.com/jeba-ajax-mailchimp
Description: This is Jeba ajax wordpress mailchimp plugin really looking awesome. Everyone can use the ajax mailchimp plugin easily like other wordpress plugin. By using [jeba_mailchimp] shortcode use the mailchimp every where post, widget, page and template.
Author: Md Jahed
Version: 1.0
Author URI: http://prowpexpert.com/
*/
function jeba_ajax_wp_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'jeba_ajax_wp_latest_jquery');


function plugin_function_jeba_mailchimp() {
    wp_enqueue_script( 'jeba-mailchimp-js', plugins_url( '/js/jquery.formchimp.js', __FILE__ ), true);
    wp_enqueue_script( 'jeba-mail-js', plugins_url( '/js/main.js', __FILE__ ), true);
    //wp_enqueue_style( 'jeba-mailchimp-css', plugins_url( '/js/main.css', __FILE__ ));
}

add_action('wp_footer','plugin_function_jeba_mailchimp');


function jeba_mailchimp_shortcode($atts, $content = null) {
	extract( shortcode_atts( array(
		'title1' => '',
		'title2' => '',
		'formaction' => '',
		'submit' => 'Subscribe',
	), $atts ) );
	
	return'<div class="mailchimps">
	

		<form id="newsletter-form" name="newsletter-form" method="post" action="'.$formaction.'">

			<div class="mc-field-group">
			<input id="email"  class="required email" name="EMAIL" type="email" value="" required/>
                        </div>
			<button class="button" type="submit" value="Subscribe">'.$submit.'</button>

		</form>
		</div>
		';
}
add_shortcode('jeba_mailchimp', 'jeba_mailchimp_shortcode'); 

add_filter('widget_text', 'do_shortcode');
?>