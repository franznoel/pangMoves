<?php
	add_action('wp_head','userpro_ajax_media_url');
	function userpro_ajax_media_url() { ?>
		<script type="text/javascript">
		var userpro_ajax_media_url = '<?php echo admin_url('admin-ajax.php'); ?>';
		</script>
	<?php
	}
	add_action('wp_head','userpro_media_upload_url');
	function userpro_media_upload_url() { ?>
		<script type="text/javascript">
		var userpro_media_upload_url = '<?php echo userpro_media_url . 'lib/fileupload/fileupload.php'; ?>';
		</script>
	<?php
	}

	add_action('wp_head','userpro_photo_upload_size');
	function userpro_photo_upload_size() { 
		$options=get_option('userpro_media');
		if($options['media_photo_size_limit']<=wp_max_upload_size()/(1024*1024))
		{
			$max_file_size=$options['media_photo_size_limit'];
		}
		else
		{
			$max_file_size=wp_max_upload_size()/(1024*1024);
		}
		?>
		<script type="text/javascript">
		var userpro_photo_upload_size = '<?php echo $max_file_size."MB"; ?>';
		</script>
	<?php
	}

	add_action('wp_head','userpro_video_upload_size');
	function userpro_video_upload_size() { 
		$options=get_option('userpro_media');
		if($options['media_video_size_limit']<=wp_max_upload_size()/(1024*1024))
		{
			$max_file_size=$options['media_video_size_limit'];
		}
		else
		{
			$max_file_size=wp_max_upload_size()/(1024*1024);
		}
		?>
		<script type="text/javascript">
		var userpro_video_upload_size = '<?php echo $max_file_size."MB"; ?>';
		</script>
	<?php
	}

	/* User media upload */
	add_action('wp_ajax_nopriv_userpro_media_upload', 'userpro_media_upload');
	add_action('wp_ajax_userpro_media_upload', 'userpro_media_upload');
	function userpro_media_upload(){
		if (!isset($_POST['src'])) die();
		extract($_POST);
		$media_name_list=explode("------",$media_name);
		$srcname_list=explode("------",$srcname);
		$src_list=explode("------",$src);
		$thumbnail_path_list=explode("------",$thumbnail_path);
		$output['response']="";
		for($count=0;$count<(count($media_name_list)-1);$count++)
		{
			$option=array('media_id'=>'','user_id'=>'','media_name'=>$media_name_list[$count],'media_type'=>$filetype,'media_display_name'=>$srcname_list[$count],'media_url'=>$src_list[$count],'media_path'=>'','thumbnail_path'=>$thumbnail_path_list[$count]);
		$options=get_option('userpro_media_gallery');
		if(empty($options))
			{
			userpro_media_add_new_media(array(),$option);
			}
		else{
			userpro_media_add_new_media($options,$option);
		}
		if ($filetype == 'media' || $filetype == 'photo' || $filetype == 'video' || $filetype == 'music') {
		$newsrc=$src;
			if ( strstr($src, 'wp-content')) {
				$src = explode('wp-content', $src);
				$src = $src[1];
				
				if ( userpro_get_option('ppfix') == 'b' ) {
					$src = '' . $src;
				} else {
					$src = '/wp-content' . $src;
				}
			}	
		}
			$media=$option;
			if ($filetype == 'media' || $filetype == 'photo' || $filetype == 'video' || $filetype == 'music'){
				$medias=get_option('userpro_media_gallery_temp_data');
				if(empty($medias)){
					userpro_media_temp_add_new_media(array(),$media);
				}
				else{
					userpro_media_temp_add_new_media($medias,$media);
				}
				$media_list=get_option('userpro_media_gallery_temp_data');
		
				$output['response'] .= '<div id="'.basename($src_list[$count]).'" class="userpro-file-input"><a href="'.$src_list[$count].'">'.$srcname_list[$count].'</a><br/><input type="button" value="Remove" class="userpro-button" onclick="delete_temp_media(\''.basename($src_list[$count]).'\')" /></div><br/>';
			}
		}
		$output=json_encode($output);
		if(is_array($output)){ print_r($output); }else{ echo $output; } die;
	}

	
	add_action('wp_ajax_nopriv_userpro_media_delete', 'userpro_media_delete');
	add_action('wp_ajax_userpro_media_delete', 'userpro_media_delete');
	function userpro_media_delete(){
		global $userpro_media_manager;
		if (!isset($_POST['file_name'])) die();
		extract($_POST);
		if(!unlink($file_name))
		{
			echo "Error In deleting file";
		}
	}

	
	add_action('wp_ajax_nopriv_userpro_temp_media_delete', 'userpro_temp_media_delete');
	add_action('wp_ajax_userpro_temp_media_delete', 'userpro_temp_media_delete');
	function userpro_temp_media_delete(){
		global $userpro_media_manager,$userpro_media_api;
		if (!isset($_POST['file_name'])) die();
		extract($_POST);
		$medias=get_option('userpro_media_gallery_temp_data');
		$options=array();
		foreach($medias as $media)
		{
			if($media['media_name']!==$file_name)
			{
				array_push($options,$media);
			}
		}
		update_option('userpro_media_gallery_temp_data',$options);
		if(!unlink($userpro_media_api->get_uploads_dir_media().$file_name))
		{
			echo "Error In deleting file";
		}
		else
		{
			if(file_exists($userpro_media_api->get_uploads_dir_media_thumbnail().$file_name))
			{
				if(!unlink($userpro_media_api->get_uploads_dir_media_thumbnail().$file_name))
				{
					echo "Error In deleting file";
				}
			}
		}
	}
