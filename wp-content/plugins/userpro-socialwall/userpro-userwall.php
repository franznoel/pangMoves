<?php
/*
Plugin Name: Social Wall Add-on for UserPro
Plugin URI: http://codecanyon.net/item/social-wall-addon-for-userpro/9553858
Description: Allow users to post, comment and interact with each other.
Version: 1.8
Author: Deluxe Themes
Author URI: http://codecanyon.net/user/DeluxeThemes/portfolio?ref=DeluxeThemes
*/

?>
<?php
if(!defined('ABSPATH')) {exit;}

if(!class_exists('UP_userPro_userwall')) :

class UP_userPro_userwall {
	
	private static $_instance;
	
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public function __construct(){
		$this->define_constant();
	      global $userpro;

		if(is_multisite()){
			require_once SUSERPRO_PLUGIN_DIR . "/functions/api.php";
		}
		if(isset($userpro)){
			
			require_once UPS_PLUGIN_DIR.'/functions/shortcode-main.php';
			require_once UPS_PLUGIN_DIR.'/functions/user_function.php';
			require_once UPS_PLUGIN_DIR.'/functions/defaults.php';
			if (is_admin()){
		foreach (glob(UPS_PLUGIN_DIR . 'admin/*.php') as $filename) { include $filename; }
	}

			
		}else{
			add_action('admin_notices',array($this , 'UPS_userpro_activation_notices'));
			return 0;
		}
		add_action('wp_enqueue_scripts', array($this , 'load_styles') , 999);
		add_action('wp_enqueue_scripts', array($this,'load_js') , 999);
		add_action('wp_head',array($this,'pluginname_ajaxurl'));
		add_action('admin_head', array($this,'load_js') , 999);
	}
	
	public function load_js(){
		
		wp_register_script('script_js', UPS_PLUGIN_URL.'scripts/userwall_script.js');
		wp_enqueue_script('script_js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-datepicker');
		
	}
	public function load_styles(){
		
		wp_register_style('userwall', UPS_PLUGIN_URL.'css/userpro_userwall.css');
		wp_enqueue_style('userwall');
		wp_register_style('fontowsome', UPS_PLUGIN_URL.'assets/font-awesome-4.2.0/css/font-awesome.min.css');
		wp_enqueue_style('fontowsome');
	}
	
	
	function pluginname_ajaxurl() {
		?>
	<script type="text/javascript">
	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	 var total=0;
	var userwall_upload_path='<?php echo UPS_PLUGIN_URL."lib/fileupload/fileupload.php";?>';	
         
	</script>
	<?php
	}
	
	
	
	public function define_constant(){
		
		define('SUSERPRO_PLUGIN_URL',WP_PLUGIN_URL.'/userpro/');
		define('SUSERPRO_PLUGIN_DIR',WP_PLUGIN_DIR.'/userpro/');
			
		define('UPS_PLUGIN_URL',WP_PLUGIN_URL.'/userpro-socialwall/');
		define('UPS_PLUGIN_DIR',WP_PLUGIN_DIR.'/userpro-socialwall/');
			
	}
	
	function UPS_userpro_activation_notices(){
		echo '<div class="error" role="alert"><p>Attention: UserPro-SocialWall requires UserPro to be installed and activated.</p></div>';
		return 0;
	}

}
endif;


function userpro_socialwall_first() {
	// ensure path to this file is via main wp plugin path
	$wp_path_to_this_file = preg_replace('/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR."/$2", __FILE__);
	$this_plugin = plugin_basename(trim($wp_path_to_this_file));
	$active_plugins = get_option('active_plugins');
	$this_plugin_key = array_search($this_plugin, $active_plugins);
	if (in_array($this_plugin, $active_plugins)) { 
		unset($active_plugins[$this_plugin_key]);
		array_push($active_plugins , $this_plugin);

		update_option('active_plugins', $active_plugins);


	}
}
add_action("activated_plugin", "userpro_socialwall_first");

function userpro_socialwall_init() {
		load_plugin_textdomain('userpro-userwall', false, dirname(plugin_basename(__FILE__)) . '/languages');
	}
	add_action('init', 'userpro_socialwall_init');

$UPS = UP_userPro_userwall::instance();


register_activation_hook(UPS_PLUGIN_DIR.'/userpro-userwall.php', 'UPW_activate_plugin');
function UPW_activate_plugin(){
	global $userpro;
	if(!isset($userpro)){
	
		add_action('admin_notices',array($UPS , 'UPS_userpro_activation_notices'));
		return 0;
	}
}

?>
