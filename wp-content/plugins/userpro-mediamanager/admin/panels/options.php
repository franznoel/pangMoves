<form method="post" action="">

<h3><?php _e('Display Settings','userpro-media'); ?></h3>
<table class="form-table">

	<tr valign="top">
		<th scope="row"><label for="media_view"><?php _e('Use lightbox to display media','userpro-media'); ?></label></th>
		<td>
			<select name="media_view" id="media_view" class="chosen-select" style="width:300px">
				<option value="y" <?php selected('y', userpro_media_get_option('media_view')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_view')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="media_per_page"><?php _e('Number of media per page','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_per_page" id="media_per_page" value="<?php echo userpro_media_get_option('media_per_page'); ?>" class="regular-text" />
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="media_display"><?php _e('Display Media to Logged In users only','userpro-media'); ?></label></th>
		<td>
			<select name="media_display" id="media_display" class="chosen-select" style="width:300px">
				<option value="y" <?php selected('y', userpro_media_get_option('media_display')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_display')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>

</table>

<h3><?php _e('Allow Media Upload Types','userpro-media'); ?></h3>
<table class="form-table">
	<tr valign="top">
		<td><label><Important><?php _e('Note','userpro-media')?></Important></label></td>
		<td><label><?php _e('If the maximum file upload size mentioned here is larger than the upload limit set by your server (PHP.ini) , then the server upload limit will be enforced. The Maximum upload limit for your server is ','userpro-media'); echo wp_max_upload_size()/(1024*1024)." MB";?></label></td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="media_photo_type"><?php _e('Photos','userpro-media'); ?></label></th>
		<td>
			<select name="media_photo_type" id="media_photo_type" class="chosen-select" style="width:300px" onChange="allowed_photo_extension_list_view()">
				<option value="y" <?php selected('y', userpro_media_get_option('media_photo_type')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_photo_type')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	<tr valign="top" id="photo_extension_list">
		<th scope="row"><label for="media_photo_extension_list"><?php _e('Allowed Extensions','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_photo_extension_list" id="media_photo_extension_list" value="<?php echo userpro_media_get_option('media_photo_extension_list'); ?>" class="regular-text" />
			<span class="description"><?php _e('comma separated list of extensions user can upload from front end. for Ex: jpg,jpeg,png,gif','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="photo_size_limit">
		<th scope="row"><label for="media_photo_size_limit"><?php _e('Max Upload Size For Images','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_photo_size_limit" id="media_photo_size_limit" value="<?php echo userpro_media_get_option('media_photo_size_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the Max Upload limit for Images in MB','userpro-media'); ?></span>
		</td>
	</tr>
	
	<tr valign="top" id="photo_number_limit">
		<th scope="row"><label for="media_photo_number_limit"><?php _e('No. Of Images','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_photo_number_limit" id="media_photo_number_limit" value="<?php echo userpro_media_get_option('media_photo_number_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the no. of images that a user can upload. Note: Set -1 for unlimited no of images','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="photo_upload_count">
		<th scope="row"><label for="media_photo_upload_count"><?php _e('Show Upload Count For Images','userpro-media'); ?></label></th>
		<td>
			<select name="media_photo_upload_count" id="media_photo_upload_count" class="chosen-select" style="width:300px">
				<option value="y" <?php selected('y', userpro_media_get_option('media_photo_upload_count')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_photo_upload_count')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="media_video_type"><?php _e('Videos','userpro-media'); ?></label></th>
		<td>
			<select name="media_video_type" id="media_video_type" class="chosen-select" style="width:300px" onChange="allowed_video_extension_list_view()">
				<option value="y" <?php selected('y', userpro_media_get_option('media_video_type')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_video_type')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	<tr valign="top" id="video_extension_list">
		<th scope="row"><label for="media_video_extension_list"><?php _e('Allowed Extensions','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_video_extension_list" id="media_video_extension_list" value="<?php echo userpro_media_get_option('media_video_extension_list'); ?>" class="regular-text" />
			<span class="description"><?php _e('comma separated list of extensions user can upload from front end. for Ex: mp4,avi,mpg,flv','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="video_size_limit">
		<th scope="row"><label for="media_video_size_limit"><?php _e('Max Upload Size For Videos','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_video_size_limit" id="media_video_size_limit" value="<?php echo userpro_media_get_option('media_video_size_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the Max Upload limit for Videos in MB','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="video_number_limit">
		<th scope="row"><label for="media_video_number_limit"><?php _e('No.Of Videos','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_video_number_limit" id="media_video_number_limit" value="<?php echo userpro_media_get_option('media_video_number_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the no. of videos that a user can upload. Note: Set -1 for unlimited no of videos','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="video_upload_count">
		<th scope="row"><label for="media_video_upload_count"><?php _e('Show Upload Count For Videos','userpro-media'); ?></label></th>
		<td>
			<select name="media_video_upload_count" id="media_video_upload_count" class="chosen-select" style="width:300px">
				<option value="y" <?php selected('y', userpro_media_get_option('media_video_upload_count')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_video_upload_count')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="media_music_type"><?php _e('Music','userpro-media'); ?></label></th>
		<td>
			<select name="media_music_type" id="media_music_type" class="chosen-select" style="width:300px" onChange="allowed_music_extension_list_view()">
				<option value="y" <?php selected('y', userpro_media_get_option('media_music_type')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_music_type')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	<tr valign="top" id="music_extension_list">
		<th scope="row"><label for="media_music_extension_list"><?php _e('Allowed Extensions','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_music_extension_list" id="media_music_extension_list" value="<?php echo userpro_media_get_option('media_music_extension_list'); ?>" class="regular-text" />
			<span class="description"><?php _e('comma separated list of extensions user can upload from front end. for Ex: mp3,wav','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="music_size_limit">
		<th scope="row"><label for="media_music_size_limit"><?php _e('Max Upload Size For Audio Files','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_music_size_limit" id="media_music_size_limit" value="<?php echo userpro_media_get_option('media_music_size_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the Max Upload limit for Audio Files in MB','userpro-media'); ?></span>
		</td>
	</tr>
	
	<tr valign="top" id="music_number_limit">
		<th scope="row"><label for="media_music_number_limit"><?php _e('No.Of Audios','userpro-media'); ?></label></th>
		<td>
			<input type="text" name="media_music_number_limit" id="media_music_number_limit" value="<?php echo userpro_media_get_option('media_music_number_limit'); ?>" class="regular-text" />
			<span class="description"><?php _e('Please Enter the no. of audios that a user can upload. Note: Set -1 for unlimited no of audios','userpro-media'); ?></span>
		</td>
	</tr>

	<tr valign="top" id="music_upload_count">
		<th scope="row"><label for="media_music_upload_count"><?php _e('Show Upload Count For Audios','userpro-media'); ?></label></th>
		<td>
			<select name="media_music_upload_count" id="media_music_upload_count" class="chosen-select" style="width:300px">
				<option value="y" <?php selected('y', userpro_media_get_option('media_music_upload_count')); ?>><?php _e('Yes','userpro-media'); ?></option>
				<option value="n" <?php selected('n', userpro_media_get_option('media_music_upload_count')); ?>><?php _e('No','userpro-media'); ?></option>
			</select>
		</td>
	</tr>
	
</table>

<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','userpro-media'); ?>"  />
	<input type="submit" name="reset-options" id="reset-options" class="button" value="<?php _e('Reset Options','userpro-media'); ?>"  />
</p>

</form>
<script type="text/javascript">
function allowed_photo_extension_list_view(){
	if(document.getElementById('media_photo_type').value=="y")
	{
		document.getElementById("photo_extension_list").style.display="";
		document.getElementById("photo_size_limit").style.display="";
		document.getElementById("photo_number_limit").style.display="";
		document.getElementById("photo_upload_count").style.display="";
	}
	else if(document.getElementById('media_photo_type').value=="n")
	{
		document.getElementById("photo_extension_list").style.display="none";
		document.getElementById("photo_size_limit").style.display="none";
		document.getElementById("photo_number_limit").style.display="none";
		document.getElementById("photo_upload_count").style.display="none";
	}
}
function allowed_video_extension_list_view(){
	if(document.getElementById('media_video_type').value=="y")
	{
		document.getElementById("video_extension_list").style.display="";
		document.getElementById("video_size_limit").style.display="";
		document.getElementById("video_number_limit").style.display="";
		document.getElementById("video_upload_count").style.display="";
	}
	else if(document.getElementById('media_video_type').value=="n")
	{
		document.getElementById("video_extension_list").style.display="none";
		document.getElementById("video_size_limit").style.display="none";
		document.getElementById("video_number_limit").style.display="none";
		document.getElementById("video_upload_count").style.display="none";
	}
}


function allowed_music_extension_list_view(){
	if(document.getElementById('media_music_type').value=="y")
	{
		document.getElementById("music_extension_list").style.display="";
		document.getElementById("music_size_limit").style.display="";
		document.getElementById("music_number_limit").style.display="";
		document.getElementById("music_upload_count").style.display="";
	}
	else if(document.getElementById('media_music_type').value=="n")
	{
		document.getElementById("music_extension_list").style.display="none";
		document.getElementById("music_size_limit").style.display="none";
		document.getElementById("music_number_limit").style.display="none";
		document.getElementById("music_upload_count").style.display="none";
	}
}
</script>
