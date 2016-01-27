<?php

	/* delete a chat */
	add_action('wp_ajax_nopriv_userpro_delete_conversation', 'userpro_delete_conversation');
	add_action('wp_ajax_userpro_delete_conversation', 'userpro_delete_conversation');
	function userpro_delete_conversation(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $chat_from != get_current_user_id() ) die();
		if (!$userpro_msg->can_chat_with( $chat_with )) die();
		
		$userpro_msg->remove_unread_chat($chat_from, $chat_with);
		$userpro_msg->remove_read_chat($chat_from, $chat_with);
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}

	/* init a chat */
	add_action('wp_ajax_nopriv_userpro_init_chat', 'userpro_init_chat');
	add_action('wp_ajax_userpro_init_chat', 'userpro_init_chat');
	function userpro_init_chat(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $chat_from != get_current_user_id() ) die();
		if (!$userpro_msg->can_chat_with( $chat_with )) die();
		
		ob_start();
		
		require_once userpro_msg_path . 'templates/new-message.php';

		$output['html'] = ob_get_contents();
		
		ob_end_clean();
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}
	
	/* show conversation */
	add_action('wp_ajax_nopriv_userpro_view_conversation', 'userpro_view_conversation');
	add_action('wp_ajax_userpro_view_conversation', 'userpro_view_conversation');
	function userpro_view_conversation(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $chat_from != get_current_user_id() ) die();
		
		$userpro_msg->remove_unread_chat($chat_from, $chat_with);
		
		ob_start();
		require_once userpro_msg_path . 'templates/conversation.php';
		$output['html'] = ob_get_contents();
		ob_end_clean();
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}
	
	/* show chat */
	add_action('wp_ajax_nopriv_userpro_show_chat', 'userpro_show_chat');
	add_action('wp_ajax_userpro_show_chat', 'userpro_show_chat');
	function userpro_show_chat(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $user_id != get_current_user_id() ) die();
		
		ob_start();
		
		require_once userpro_msg_path . 'templates/messages.php';

		$output['html'] = ob_get_contents();
		
		ob_end_clean();
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}
	
	/* start a chat */
	add_action('wp_ajax_nopriv_userpro_start_chat', 'userpro_start_chat');
	add_action('wp_ajax_userpro_start_chat', 'userpro_start_chat');
	function userpro_start_chat(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $chat_from != get_current_user_id() ) die();
		if (!$userpro_msg->can_chat_with( $chat_with )) die();
		

		
		/* Create folders to store conversations */
		$userpro_msg->do_chat_dir( $chat_from, $chat_with, $mode='sent' );
		$userpro_msg->do_chat_dir( $chat_with, $chat_from, $mode='inbox' );
		if(userpro_msg_get_option('default_msg')==1)
         	$chat_body=$chat_body."<br><br><br><p style=font-size:10px;color:gray;>".stripslashes( esc_attr(userpro_msg_get_option('default_msg_text')) )."</p>";	
		$userpro_msg->write_chat( $chat_from, $chat_with, $chat_body, $mode='sent' );
		$userpro_msg->write_chat( $chat_with, $chat_from, $chat_body, $mode='inbox' );
		
		$userpro_msg->email_user($chat_with, $chat_from, $chat_body);
		
		$userpro_msg->remove_unread_chat($chat_from, $chat_with);
		
		/* Status for browser */
		$output['message'] = '<div class="userpro-msg-notice">'.__('Your message has been sent successfully.','userpro-msg').'</div>';
		
		ob_start();
		require_once userpro_msg_path . 'templates/conversation.php';
		$output['html'] = ob_get_contents();
		ob_end_clean();
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}

/*****************************************************Code for broadcast message*************************************************/	
	add_action('wp_ajax_nopriv_userpro_broadcast_msg', 'userpro_broadcast_msg');
	add_action('wp_ajax_userpro_broadcast_msg', 'userpro_broadcast_msg');
	function userpro_broadcast_msg(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		
		if ( !userpro_is_logged_in() || $user_id != get_current_user_id() ) die();
		
		ob_start();
		
		require_once userpro_msg_path . 'templates/broadcast.php';

		$output['html'] = ob_get_contents();
		
		ob_end_clean();
		
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}

	add_action('wp_ajax_nopriv_userpro_broadcast', 'userpro_broadcast');
	add_action('wp_ajax_userpro_broadcast', 'userpro_broadcast');
	function userpro_broadcast(){
		global $userpro, $userpro_msg;
		$output = '';
		extract($_POST);
		if ( !userpro_is_logged_in() || $user_id != get_current_user_id() ) die();
		$user_id=get_current_user_id();
		$registered_users=explode(",",$user_list);
		$no_of_users-=1;
		if($registered_users[$user_no]!=$user_id)
		{
			$userpro_msg->do_chat_dir( $registered_users[$user_no], $user_id, $mode='inbox' );
			$userpro_msg->write_chat( $registered_users[$user_no], $user_id, $broadcast_body, $mode='inbox' );
			$userpro_msg->email_user($registered_users[$user_no], $user_id, $broadcast_body);
			if(isset($_SESSION['user_count']))
			{
				$_SESSION['user_count']+=1;
			}
			else
			{
				$_SESSION['user_count']=1;
			}
			$output['message'] = '<div class="userpro-msg-notice">'.__('Your message has been sent to '.userpro_profile_data('display_name',$registered_users[$user_no]).'.','userpro-msg').'</div><div class="userpro-msg-notice">'.__('Message sent to '.$_SESSION['user_count'].' out of '.$no_of_users.' users.','userpro-msg').'</div>';
			if($_SESSION['user_count']>=$no_of_users)
			{
				unset($_SESSION['user_count']);
				$userpro_msg->email_broadcaster($user_id, $broadcast_body);
				$output['message'].='<div class="userpro-msg-notice">'.__('Your message has been broadcasted successfully.','userpro-msg').'</div>';
			}
			$output=json_encode($output);
			if(is_array($output)){ print_r($output); }else{ echo $output; } die;
		}
		else
		{
			$output['message'] = '';
			$output=json_encode($output);
			if(is_array($output)){ print_r($output); }else{ echo $output; } die;
		}
	}
		
	add_action('wp_head','get_translated_text_for_alert');
	function get_translated_text_for_alert(){ ?>
		<script type="text/javascript">
		var translated_text_for_alert = '<?php _e("This message will be sent immediately to ALL registered users. Are you sure you want to send this ?","userpro-msg") ?>';
		</script>
	<?php
	}

	add_action('wp_head','get_list_of_all_registered_users');
	function get_list_of_all_registered_users(){ 
		$args = array(
			'blog_id'      => $GLOBALS['blog_id'],
			'role'         => '',
			'meta_key'     => '',
			'meta_value'   => '',
			'meta_compare' => '',
			'meta_query'   => array(),
			'include'      => array(),
			'exclude'      => array(),
			'orderby'      => 'id',
			'order'        => 'ASC',
			'offset'       => '',
			'search'       => '',
			'number'       => '',
			'count_total'  => false,
			'fields'       => 'all',
			'who'          => ''
 		);
		$all_users=get_users($args);
		$user_list=array();
		foreach($all_users as $user_data)
		{
			$user_list=array_merge($user_list,array($user_data->ID));
		}
		unset($_SESSION['user_count']);
		?>
		<script type="text/javascript">
		var list_of_all_registered_users = '<?php echo json_encode($user_list);?>';
		var list_of_all_registered_users_string = '<?php echo implode(",",$user_list);?>';
		var current_user_id='<?php echo get_current_user_id();?>';
		var user_count=0;
		</script>
	<?php
	}
/*****************************************************Code end*************************************************/
