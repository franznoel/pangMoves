<?php

	/* get a global option */
	function userpro_userwall_get_option( $option ) {
		$userpro_default_options = userpro_userwall_default_options();
		$settings = get_option('userpro_userwall');
		switch($option){
		
			default:
				if (isset($settings[$option])){
					return $settings[$option];
				} else {
					return $userpro_default_options[$option];
				}
				break;
	
		}
	}
	
	/* set a global option */
	function userpro_userwall_set_option($option, $newvalue){
		$settings = get_option('userpro_userwall');
		$settings[$option] = $newvalue;
		update_option('userpro_userwall', $settings);
	}
	
	function userpro_userwall_default_options()
	{
			$array = array();
			$array['title'] = __('Social Wall','userpro-userwall');
			$array['totalpost'] = __('10','userpro-userwall');
			$array['nonloginusers'] = __('0','userpro-userwall');
			return apply_filters('userpro_userwall_default_options_array', $array);
	}
	
