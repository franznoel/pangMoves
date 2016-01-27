<?php
add_action('userpro_after_fields','userpro_media_manager');
function userpro_media_manager($arg0){
	global $userpro_media_manager;
	if (is_user_logged_in() && $arg0['template']==='view' || userpro_media_get_option('media_display')=='n' && $arg0['template']==='view')
	{
		?><div class='userpro-section userpro-column userpro-collapsible-1 userpro-collapsed-0'><?php _e('Media Gallery','userpro-media');?></div>
		<?php
		$count=0;$photo=0;$video=0;$music=0;
		$medias=get_option('userpro_media_gallery');
		if(!empty($medias)){
		foreach($medias as $media)
		{
			if(($media['media_type']=='photo' || $media['media_type']=='video' || $media['media_type']=='music') && $media['user_id']==$arg0['user_id'])
			{
				if(file_exists($media['media_path']))
				{
					if($media['media_type']=='photo')
						$photo++;
					if($media['media_type']=='video')
						$video++;
					if($media['media_type']=='music')
						$music++;
					$count++;
				}
			}
		}
		}
		if($count>0)
		{
			?>
		<div class='userpro-field userpro-field-all-media userpro-field-view'>
		<div id="navmediacontainer">
			<ul>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>1',<?php echo $arg0['user_id'];?>);" id="photo_tab<?php echo $arg0['user_id'];?>" style="background-color:#fff;color:#000"><?php _e('Photos','userpro-media');?></a></li>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>2',<?php echo $arg0['user_id'];?>);" id="video_tab<?php echo $arg0['user_id'];?>"><?php _e('Videos','userpro-media');?></a></li>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>3',<?php echo $arg0['user_id'];?>);" id="music_tab<?php echo $arg0['user_id'];?>"><?php _e('Music','userpro-media');?></a></li>
			</ul>
			<div class="media_container">
				<div id="photo_tab_data<?php echo $arg0['user_id'];?>"><br/><div class="media_clear"></div>
				  	<?php 
					if($photo>0)
					{
						$userpro_media_manager->get_media_list_view('photos',$arg0['user_id']);
					}
					else
					{
						_e("No Photos in the gallery",'userpro-media');
					}
					?>
					<div class="userpro-clear"></div>
			  </div>
				<div id="video_tab_data<?php echo $arg0['user_id'];?>" style="display:none"><br/><div class="media_clear"></div>
				  	<?php
					if($video>0)
					{
						$userpro_media_manager->get_media_list_view('videos',$arg0['user_id']);
					}
					else
					{
						_e("No Videos in the gallery",'userpro-media');
					}
					?>
					<div class="userpro-clear"></div>
			  </div>
				<div id="music_tab_data<?php echo $arg0['user_id'];?>" style="display:none"><br/><div class="media_clear"></div>
				  	<?php
					if($music>0) 
					{
						$userpro_media_manager->get_media_list_view('music',$arg0['user_id']);
					}
					else
					{
						_e("No Music files in the gallery",'userpro-media');
					}
					?>
					<div class="userpro-clear"></div>
			  </div>
			</div>
		</div>
		</div>
		<?php
		}
		?>
	<?php
	}
	else if(  is_user_logged_in() && $arg0['template']==='edit'  ){$i=$arg0['unique_id'];$data='';$options=get_option('userpro_media');
		$count=0;$photo=0;$video=0;$music=0;
		$medias=get_option('userpro_media_gallery');
		delete_option('userpro_media_gallery_temp_data');
		if(!empty($medias))
		{
		foreach($medias as $media)
		{
			if(($media['media_type']=='photo' || $media['media_type']=='video' || $media['media_type']=='music') && $media['user_id']==$arg0['user_id'])
			{
				if(file_exists($media['media_path']))
				{
					if($media['media_type']=='photo')
						$photo++;
					if($media['media_type']=='video')
						$video++;
					if($media['media_type']=='music')
						$music++;
				}
			}
		}
		}
		?><div class='userpro-section userpro-column userpro-collapsible-1 userpro-collapsed-0' ><?php _e('Media Gallery','userpro-media');?></div>
		<div class='userpro-field userpro-field-all-media userpro-field-view'>
		<div id="navmediacontainer">
			<ul>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>1',<?php echo $arg0['user_id'];?>);" id="photo_tab<?php echo $arg0['user_id'];?>" style="background-color:#fff;color:#000"><?php _e('Photos','userpro-media');?></a></li>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>2',<?php echo $arg0['user_id'];?>);" id="video_tab<?php echo $arg0['user_id'];?>"><?php _e('Videos','userpro-media');?></a></li>
				<li><a href="#" onclick="change_media_tab('<?php echo $arg0['user_id'];?>3',<?php echo $arg0['user_id'];?>);" id="music_tab<?php echo $arg0['user_id'];?>"><?php _e('Music','userpro-media');?></a></li>
			</ul>
			<div class="media_container">
				<div id="photo_tab_data<?php echo $arg0['user_id'];?>"><br/><div class="media_clear"></div>
					<?php	
						if($options['media_photo_upload_count']=="y")
						{
							$data="<p>".sprintf(__('You have uploaded %s image/s','userpro-media'),$photo)."</p>";
							if($options['media_photo_number_limit']=='-1')
							{
								$image_count=99999999;
							}
							else
							{
								$image_count=$options['media_photo_number_limit']-$photo;
							}
							if($options['media_photo_number_limit']!='-1' && $image_count>0)
							{
								$data.="<p>".sprintf(__('You can now upload %s image/s','userpro-media'),$image_count)."</p>";
							}
						}
						else
						{
							if($options['media_photo_number_limit']=='-1')
							{
								$image_count=99999999;
							}
							else
							{
								$image_count=$options['media_photo_number_limit']-$photo;
							}
							$data="";
						}
						if($image_count>0 || $options['media_photo_number_limit']=='-1')
						{
					 		$data.="<div id='media_photo_uploader' class = 'userpro-input' style='float:left'>";
						$data.="<div class = 'userpro-pic userpro-photo-file' data-remove_text='".__('Remove','userpro')."'></div>";
							$data.="<div class = 'userpro-media-upload' data-filetype = 'photo' data-upload_limit='".$image_count."' data-allowed_extensions = '".$options['media_photo_extension_list']."'>".__('Upload New Photo','userpro-media')."</div>";
						$data.="<input data-required='0' type='hidden' name='photo-$i' id='photo-$i' value='' />";
						if($options['media_photo_size_limit']<=wp_max_upload_size()/(1024*1024))
						{
							$data.= sprintf(__('Max Upload limit is %s MB','userpro-media'),$options['media_photo_size_limit']);
						}
						else
						{
						$data.= sprintf(__('Max Upload limit is %s MB','userpro-media'),wp_max_upload_size()/(1024*1024));
						}
					$data.="</div><br/>";
						}
						if($options['media_photo_type']=='y')
							echo $data;
				?><div class="media_clear"></div>
					<?php
					if($photo>0){
						echo $userpro_media_manager->get_media_list_edit('photos',$arg0['user_id']);
					}
					else
					{
						_e("No Photos in the gallery",'userpro-media');
					}?>
					<div class="userpro-clear"></div>
			  </div>
				<div id="video_tab_data<?php echo $arg0['user_id'];?>" style="display:none"><br/><div class="media_clear"></div>
					<?php
						if($options['media_video_upload_count']=="y")
						{
							$data="<p>".sprintf(__('You have uploaded %s video/s','userpro-media'),$video)."</p>";
							if($options['media_video_number_limit']=='-1')
							{
								$video_count=99999999;
							}
							else
							{
								$video_count=$options['media_video_number_limit']-$video;
							}
							if($options['media_video_number_limit']!='-1' && $video_count>0)
							{
								$data.="<p>".sprintf(__('You can now upload %s video/s','userpro-media'),$video_count)."</p>";
							}
						}
						else
						{
							if($options['media_video_number_limit']=='-1')
							{
								$video_count=99999999;
							}
							else
							{
								$video_count=$options['media_video_number_limit']-$video;
							}
							$data="";
						}
						if($video_count>0 || $options['media_video_number_limit']=='-1')
						{
					 		$data.="<div class = 'userpro-input' style='float:left'>";
						$data.="<div class = 'userpro-pic userpro-video-file' data-remove_text='".__('Remove','userpro')."'></div>";
							$data.="<div class = 'userpro-media-upload' data-filetype = 'video' data-upload_limit='".$video_count."' data-allowed_extensions = '".$options['media_video_extension_list']."'>".__('Upload New Video','userpro-media')."</div>";
						$data.="<input data-required='0' type='hidden' name='video-$i' id='video-$i' value='' />";
						if($options['media_video_size_limit']<=wp_max_upload_size()/(1024*1024))
						{
							$data.= sprintf(__('Max Upload limit is %s MB','userpro-media'),$options['media_video_size_limit']);
						}
						else
						{
						$data.= sprintf(__('Max Upload limit is %s MB','userpro-media'),wp_max_upload_size()/(1024*1024));
						}
						$data.="</div><br/>";
						}
						if($options['media_video_type']=='y')
							echo $data;
					?><div class="media_clear"></div>
					<?php 
					if($video>0)
					{
						echo $userpro_media_manager->get_media_list_edit('videos',$arg0['user_id']);
					}
					else
					{
						_e("No Videos in the gallery",'userpro-media');
					}?>
					<div class="userpro-clear"></div>
			  </div>
				<div id="music_tab_data<?php echo $arg0['user_id'];?>" style="display:none"><br/><div class="media_clear"></div>
					<?php
						if($options['media_music_upload_count']=="y")
						{
							$data="<p>".sprintf(__('You have uploaded %s audio/s','userpro-media'),$music)."</p>";
							if($options['media_music_number_limit']=='-1')
							{
								$music_count=99999999;
							}
							else
							{
								$music_count=$options['media_music_number_limit']-$music;
							}
							if($options['media_music_number_limit']!='-1' && $music_count>0)
							{
								$data.="<p>".sprintf(__('You can now upload %s audio/s','userpro-media'),$music_count)."</p>";
							}
						}
						else
						{
							if($options['media_music_number_limit']=='-1')
							{
								$music_count=99999999;
							}
							else
							{
								$music_count=$options['media_music_number_limit']-$music;
							}
							$data="";
						}
						if($music_count>0 || $options['media_music_number_limit']=='-1')
						{
					 		$data.="<div class = 'userpro-input' style='float:left'>";
						$data.="<div class = 'userpro-pic userpro-music-file' data-remove_text='".__('Remove','userpro')."'></div>";
							$data.="<div class = 'userpro-media-upload' data-filetype = 'music' data-upload_limit='".$music_count."' data-allowed_extensions = '".$options['media_music_extension_list']."'>".__('Upload New Music','userpro-media')."</div>";
						$data.="<input data-required='0' type='hidden' name='music-$i' id='music-$i' value='' />";
						if($options['media_music_size_limit']<=wp_max_upload_size()/(1024*1024))
						{
							$data.=sprintf(__('Max Upload limit is %s MB','userpro-media'),$options['media_music_size_limit']);
						}
						else
						{
						$data.= sprintf(__('Max Upload limit is %s MB','userpro-media'),wp_max_upload_size()/(1024*1024));
						}
						$data.="</div><br/>";
						}
						if($options['media_music_type']=='y')
							echo $data;
					?><div class="media_clear"></div>
					<?php 
					if($music>0)
					{
						echo $userpro_media_manager->get_media_list_edit('music',$arg0['user_id']);
					}
					else{
						_e("No Music files in the gallery",'userpro-media');
					}
					?>
					<div class="userpro-clear"></div>
			  </div>
			</div>
		</div>
		</div>
<?php

	}
}
