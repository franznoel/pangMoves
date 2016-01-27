<form method="post" action="">

<h3><?php _e('Display Settings','userpro-userwall'); ?></h3>
<table class="form-table">

	
	<tr valign="top">
		<th scope="row"><label for="media_per_page"><?php _e('Title','userpro-userwall'); ?></label></th>
		<td>
			<input type="text" name="title" id="title" value="<?php echo userpro_userwall_get_option( 'title' ); ?>" class="regular-text" />
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="totalpost"><?php _e('Post Per Page','userpro_userwall'); ?></label></th>
		<td>
			<input type="text" name="totalpost" id="totalpost" value="<?php echo userpro_userwall_get_option( 'totalpost' ); ?>" class="regular-text" />
		</td>
	</tr>

<tr valign="top">
		<th scope="row"><label for="For All User"><?php _e('Display Wall To Visitors','userpro-userwall'); ?></label></th>
		<td>
			<select name="nonloginusers" id="nonloginusers" class="chosen-select" style="width:300px">
				<option value="1" <?php selected(1, userpro_userwall_get_option('nonloginusers')); ?>><?php _e('Yes','userpro-userwall'); ?></option>
				<option value="0" <?php selected(0, userpro_userwall_get_option('nonloginusers')); ?>><?php _e('No','userpro-userwall'); ?></option>
			</select>
        <span class="description"><?php _e('If this option is set to yes then non logged in users will be able to view the wall','userpro-userwall'); ?></span>
		</td>
	</tr>	

</table>



<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','userpro-userwall'); ?>"  />
	<input type="submit" name="reset-options" id="reset-options" class="button" value="<?php _e('Reset Options','userpro-userwall'); ?>"  />
</p>

</form>

