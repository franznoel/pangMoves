<?php
require_once(userpro_media_path."/lib/getid3/getid3.php");
class Userpro_Media_Manager{
	function __construct(){
		$this->slug = 'userpro';
		$this->subslug = 'userpro-media';
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		$this->plugin_data = get_plugin_data( userpro_media_path . 'index.php', false, false);
		$this->version = $this->plugin_data['Version'];
	}

	function get_media_list_view($media_list,$user_id){
		global $userpro_media_api;$options=get_option('userpro_media');
		
		switch($media_list)
		{
			case 'photos':
				$medias=get_option('userpro_media_gallery');$media_array=array();
				foreach($medias as $media)
				{
					if($media['media_type']=='photo' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							echo '<div class="thumbnail_media"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
						}
						else
						{
							echo '<div class="thumbnail_media"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:block"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:none"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page" type="button" onclick="get_previous_page_media();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page" type="button" onclick="get_next_page_media();" value="'.__('Next','userpro-media').'">';
				}
				break;
			case 'videos':$getDemo=new getID3();$media_array=array();
				$medias=get_option('userpro_media_gallery');
				foreach($medias as $media)
				{
					if($media['media_type']=='video' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							echo '<div class="thumbnail_media" id="'.$i.'_video"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
						}
						else
						{
							echo '<div class="thumbnail_media" id="'.$i.'_video"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:block"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:none"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:block"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:none"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count_video" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count_video" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count_video" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page_video" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page_video" type="button" onclick="get_previous_page_media_video();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page_video" type="button" onclick="get_next_page_media_video();" value="'.__('Next','userpro-media').'">';
				}
				break;
			case 'music':$getThumb=new getID3();$media_array=array();
				$medias=get_option('userpro_media_gallery');
				foreach($medias as $media)
				{
					if($media['media_type']=='music' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							$getDetails=$getThumb->analyze($media_array[$i]['media_path']);
							if(isset($getDetails['comments']['picture'][0]))
							{
								$Image='data:'.$getDetails['comments']['picture'][0]['image_mime'].';charset=utf-8;base64,'.base64_encode($getDetails['comments']['picture'][0]['data']);
							}
							if(isset($Image))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							else
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
						else
						{
							echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count_music" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count_music" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count_music" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page_music" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page_music" type="button" onclick="get_previous_page_media_music();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page_music" type="button" onclick="get_next_page_media_music();" value="'.__('Next','userpro-media').'">';
				}
				break;
		}
	}
	
	function get_media_list_edit($media_list,$user_id){
		global $userpro_media_api;$options=get_option('userpro_media');
		
		switch($media_list)
		{
			case 'photos':
				$medias=get_option('userpro_media_gallery');$media_array=array();
				foreach($medias as $media)
				{
					if($media['media_type']=='photo' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							echo '<div class="thumbnail_media" id="'.$i.'"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'" ><br/><div  class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
						}
						else
						{
							echo '<div class="thumbnail_media" id="'.$i.'"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'" ><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:block"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:none"><a class="userpro-tip-fade lightview" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><img src="'.$media_array[$i]['thumbnail_path'].'"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page" type="button" onclick="get_previous_page_media();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page" type="button" onclick="get_next_page_media();" value="'.__('Next','userpro-media').'">';
				}
				break;
			case 'videos':
				$getDemo=new getID3();$media_array=array();
				$medias=get_option('userpro_media_gallery');
				foreach($medias as $media)
				{
					if($media['media_type']=='video' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							echo '<div class="thumbnail_media" id="'.$i.'_video"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
						}
						else
						{
							echo '<div class="thumbnail_media" id="'.$i.'_video"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:block"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:none"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:block"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_video" style="display:none"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_video\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count_video" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count_video" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count_video" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page_video" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page_video" type="button" onclick="get_previous_page_media_video();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page_video" type="button" onclick="get_next_page_media_video();" value="'.__('Next','userpro-media').'">';
				}
				break;
			case 'music':
				$getThumb=new getID3();$media_array=array();
				$medias=get_option('userpro_media_gallery');
				foreach($medias as $media)
				{
					if($media['media_type']=='music' && $media['user_id']==$user_id)
					{
						if(file_exists($media['media_path']))
						{
							array_push($media_array,$media);
						}
					}
				}
				$media_per_page=$options['media_per_page'];
				if(count($media_array)<=$media_per_page)
				{
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							$getDetails=$getThumb->analyze($media_array[$i]['media_path']);
							if(isset($getDetails['comments']['picture'][0]))
							{
								$Image='data:'.$getDetails['comments']['picture'][0]['image_mime'].';charset=utf-8;base64,'.base64_encode($getDetails['comments']['picture'][0]['data']);
							}
							if(isset($Image))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							else
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
						else
						{
							echo '<div class="thumbnail_media" id="'.$i.'_music"><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
						}
					}
				}
				else
				{
					$count=1;
					for($i=(count($media_array)-1);$i>=0;$i--)
					{
						if($options['media_view']=='y')
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
						else
						{
							if($i<$media_per_page && isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:block"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
							elseif(isset($media_array[$i]))
							{
								echo '<div class="thumbnail_media" id="'.$i.'_music" style="display:none"><a target="_blank" href="'.$media_array[$i]['media_url'].'" '.userpro_file_type_icon($media_array[$i]['media_url']).'><embed src="'.$media_array[$i]['media_url'].'" alt="'.$media_array[$i]['media_display_name'].'" autoplay="false"><br/><div class="description">'.$media_array[$i]['media_display_name'].'</div></a><br/><input class="userpro-button red" type="button" onclick="userpro_delete_files(\''.$media_array[$i]['media_path'].'\',\''.$user_id.'\',\''.$i.'_music\')" style="" value="'.__('Remove','userpro-media').'"></div>';
							}
						}
					}
					echo '<div class="userpro-input">';
					echo '<input type="hidden" id="count_music" name="counter" value="'.$count.'">';
					echo '<input type="hidden" id="total_page_count_music" name="count" value="'.ceil(count($media_array)/$media_per_page).'">';
					echo '<input type="hidden" id="total_media_count_music" name="media_count" value="'.count($media_array).'">';
					echo '<input type="hidden" id="media_per_page_music" name="media_per_page" value="'.$media_per_page.'">';
					echo '</div>';
					echo '<input class="userpro-button paginate-button-previous" id="previous_page_music" type="button" onclick="get_previous_page_media_music();" style="display:none" value="'.__('Previous','userpro-media').'">';
					echo '<input class="userpro-button paginate-button-next" id="next_page_music" type="button" onclick="get_next_page_media_music();" value="'.__('Next','userpro-media').'">';
				}
				break;
		}
	}
}

$userpro_media_manager=new Userpro_Media_Manager();
?>
