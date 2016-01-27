<div class="userpro userpro-users userpro-<?php echo $i; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>

 <div class="title"><?php

 	echo userpro_userwall_get_option( 'title' );
 
 ?>
 </div>
		
</div>	
<?php if ( is_user_logged_in() ) {?>
<div class="textarea"><textarea placeholder="<?php _e('Update Status...','userpro-userwall');?>" id=userpost name="userpost"cols="50" rows="2" style="border: 1px solid #ccc;border-radius: 5px;width: 100%;"></textarea></div>
<div class="buttonpost"><button type="submit"  name="Post_Now" value="Post Now" title="<?php _e('Add to Wall','userpro-userwall'); ?>" onclick="user_post_data('userpost',<?php echo get_current_user_id();?>);"><i class="fa fa-send fa-fw"></i><b><?php _e('Add to Wall','userpro-userwall');?></b></button></div>
			
<div class="upload"><button class=userwall_upload  data-filetype = 'photo' type="submit"  name="upload_image" value="upload" data-allowed_extensions=jpg,png,jpeg,gif title="<?php _e('Upload','userpro-userwall'); ?>"><i class="fa fa-image fa-fw"></i> <b><?php _e('Add Photos','userpro-userwall');?></b></button> 
<img src="<?php echo UPS_PLUGIN_URL.'images/loader.GIF'?>" id="post-loader" style="float: right;"/>
</div>
<?php }?>


<div id="userwalldata">
<?php
$args = array(
	'posts_per_page'   => userpro_userwall_get_option( 'totalpost' ),
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'userpro_userwall',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true ); 

$postslist = get_posts( $args );

foreach($postslist as $post)
{

global $userpro;
$user_id = get_post_meta( $post->ID,'user_id');

?>
<div class="userwall" id=<?php echo $post->ID?>>

<div class="userwall_delete_post">
<?php 	

	$report_userid=get_post_meta($post->ID,'socialwall_report',true );
if(!is_array($report_userid)) $report_userid = array();
	if(!in_array(get_current_user_id(), $report_userid)) {?>
<i onclick="userwall_report_post(<?php echo $post->ID;?> ,<?php echo get_current_user_id();?>);" class="reportpost fa fa-exclamation-circle"></i>
<?php } else{?>
<i style="color:black;opacity: 0.5;cursor:default;" class="fa fa-exclamation-circle"></i>
<?php }?>
<?php if($user_id[0]==get_current_user_id() ||  is_super_admin(get_current_user_id())) {?>


<i onclick="userwall_delete_post(<?php echo $post->ID;?> , this);" class="fa fa-trash fa-fw"></i>


<?php }?></div>
<div class="userwall-post-content-img" data-key="profilepicture"><a  href="<?php echo $userpro->permalink($user_id[0]); ?>" title="<?php _e('View Profile','userpro'); ?>" ><?php echo get_avatar( $user_id[0], "60" );  ?> </a></div> 

<div class="userwall-post-content" id=userwall-post-content<?php echo $post->ID?>>
				<div class="displayname"><a href="<?php echo $userpro->permalink($user_id[0]); ?>"><?php echo userpro_profile_data('display_name', $user_id[0]); ?></a>
				<div class="clear"></div>
				<?php $timestamp = strtotime($post->post_date); 
$new_date = date('d-M-Y h:i', $timestamp);?>
				<div class="post-date"><?php _e("Posted On ","userpro-userwall");echo $new_date;?></div>		
<div class="clear"></div><div class="content-text">
<?php 

if($post->post_title=="imgpost")
	echo '<div class="post-img"><img src="'.$post->post_content.'" style="-moz-user-select: none;
    border-radius: 10px;max-width:99%; width: 100% !important;"></div>';
else
{
echo html_entity_decode($post->post_content);
}
?>
</div>
</div>
</div>
<div class="userwall-comment-data-<?php echo $post->ID;?>" id="userwall-comment" >
<?php 
 $like_post=array();
 $dislike_post=array();

$like_post=get_post_meta($post->ID,'socialwall_likes',true);
$dislike_post=get_post_meta($post->ID,'socialwall_dislikes',true);
if(!is_array($like_post)) $like_post = array();
if(!is_array($dislike_post)) $dislike_post = array();
if (!in_array(get_current_user_id(), $like_post) &&  !in_array(get_current_user_id(), $dislike_post) && is_user_logged_in())

{


?>

<div class="userwall_postlikecount_post" id=userwall_postlikecount_post<?php echo $post->ID?>>
<i onclick="userwall_postlikecount_post(<?php echo $post->ID;?>,<?php echo get_current_user_id()?>,<?php if(empty($like_post)) echo 0; else echo  count($like_post);?>,<?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?>);" class="fa fa-thumbs-up socialwall_postlikecount_post btn-like-dislike"></i> <i class="socialwall_postlikecount_post "><?php if(empty($like_post)) echo 0; else echo  count($like_post);?></i>
<i onclick="userwall_postdislikecount_post(<?php echo $post->ID;?>,<?php echo get_current_user_id()?>,<?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?>,<?php if(empty($like_post)) echo 0; else echo  count($like_post);?>);" class="fa fa-thumbs-down socialwall_postlikecount_post btn-like-dislike"></i><i class="socialwall_postlikecount_post "><?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?></i>
</div>
<!-- <div class="countlike" id="countlike<?php echo $post->ID ?>">

</div> -->

<?php }
else
{
?>
<?php
echo '<i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-up"></i>'; ?>
<i class="socialwall_postlikecount_post "><?php if(empty($like_post)) echo 0; else echo  count($like_post);?></i>
<?php 
echo '<i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-down"></i>';
?>
<i class="socialwall_postlikecount_post "><?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?></i>
<?php
}

?>
<?php 
$comments = get_post_meta($post->ID,'user_comment');

foreach($comments as $comment)
{
		
?>
<div class="userwall_comment_data" id="<?php echo $i ?>"><?php
if($comment['comment_userid']==get_current_user_id() ||  is_super_admin(get_current_user_id())) {
		?><div class=userwall_delete_comment>
		<i id="delete_comment_<?php echo $post->ID; ?>" onclick="userwall_delete_comment('<?php echo $post->ID;?>','<?php echo $comment['comment_content'];?>',this);" class="fa fa-trash fa-fw-3"></i></div>
	<?php
	}?><div class="userwall-comment-content-img" data-key="profilepicture"><a  href="<?php echo $userpro->permalink($comment['comment_userid']); ?>" title="<?php _e('View Profile','userpro'); ?>" ><?php echo get_avatar( $comment['comment_userid'], "40" );  ?> </a></div> 
	
			
	<div class="userwall-post-content"><div class="displayname"><a href="<?php echo $userpro->permalink($comment['comment_userid']); ?>"><?php echo userpro_profile_data('display_name', $comment['comment_userid']); ?></a></div>
	
	<?php 
	$commenttimestamp = strtotime($comment['comment_date']);
	$commenttime = date('d-M-Y', $commenttimestamp);?>
	<div class="post-date post-comment-date"><?php echo "Commented On ".$commenttime;?></div><?php
	echo "<br><p>".$comment['comment_content']."</p>";
	
echo "</div></div>";

}
?>
</div>
<div class="commenttext">
<div class="clear"></div>
<?php if ( is_user_logged_in() ) {?>
<textarea id=userwall-comment-<?php echo $post->ID;?> placeholder="<?php _e('Enter comment and Hit ENTER to submit...','userpro-userwall');?>"  onkeypress="user_post_comment('userwall-comment',<?php echo get_current_user_id();?>,<?php  echo $post->ID;?>,event);" name="userwall-comment"cols="40" rows="1" style="" class="comment_textarea"></textarea>
<?php }?>
</div>




</div>

<?php 
}

?>

</div>
<?php
global $wp_query,$wpdb;
$curauth = $wp_query->get_queried_object();
$post_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'userpro_userwall' AND post_status = 'publish'");
if($post_count>=userpro_userwall_get_option( 'totalpost' ))
{
?>
<div class="socialwall-load-more" id="socialwall-load-more" data-max-pages="<?php  echo userpro_userwall_get_option( 'totalpost' ) ?>"><span><?php _e('Load More...','userpro-userwall')?><img src="<?php echo UPS_PLUGIN_URL.'images/loader.GIF'?>" id="loademore-loader" /></span></div>
<?php }?>
