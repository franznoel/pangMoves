<?php
add_action('wp_ajax_nopriv_countpost', 'countpost');
add_action('wp_ajax_countpost', 'countpost');
function countpost()
{
global $wpdb;
$formdate=$_POST['formdate'];
	$todate=$_POST['todate'];

$post_count = $wpdb->get_results("SELECT id FROM $wpdb->posts WHERE post_type = 'userpro_userwall' AND post_status = 'publish'  AND post_date BETWEEN '$formdate ' 
AND '$todate'");

echo count($post_count);
die();
}


add_action('wp_ajax_nopriv_socialwall_delete_post_by_date', 'socialwall_delete_post_by_date');
add_action('wp_ajax_socialwall_delete_post_by_date', 'socialwall_delete_post_by_date');
function socialwall_delete_post_by_date()
{
	global $wpdb;
	
	$formdate=$_POST['formdate'];
	$todate=$_POST['todate'];

$post_count = $wpdb->get_results("SELECT id FROM $wpdb->posts WHERE post_type = 'userpro_userwall' AND post_status = 'publish'  AND post_date BETWEEN '$formdate' 
AND '$todate'");

if(!empty($post_count))
{	
	
	foreach ($post_count as $count)
	{
		$list = (array)get_option('sw_reportpostid');
		$key = array_search($count->id, $list);
	unset($list[$key]);
	update_option('sw_reportpostid',$list);
		wp_delete_post($count->id); 
	}
	echo count($post_count);
	die();
	
 }
else
{	
	
	echo "notfound";
	 die();
	
	
}


	
}



add_action('wp_ajax_nopriv_socialwall_ignore_post', 'socialwall_ignore_post');
add_action('wp_ajax_socialwall_ignore_post', 'socialwall_ignore_post');
function socialwall_ignore_post()
{
	$list = (array)get_option('sw_reportpostid');
	$key = array_search($_POST['post_id'], $list);
	unset($list[$key]);
	update_option('sw_reportpostid',$list);
	
}


add_action('wp_ajax_nopriv_socialwall_report_post', 'socialwall_report_post');
add_action('wp_ajax_socialwall_report_post', 'socialwall_report_post');
function socialwall_report_post()
{
	
	$report_post=get_post_meta($_POST['post_id'],'socialwall_report',true );
	
	
		$report_post_id=get_option('sw_reportpostid');
		if(is_array($report_post_id))
		{
			array_push($report_post_id,$_POST['post_id']);
		}
		else
		{
			$report_post_id=array($_POST['post_id']);
		}
		
		$post_id=get_option('sw_reportpostid');
		if(!in_array($_POST['post_id'], $post_id))
		update_option("sw_reportpostid",$report_post_id);
	
	if(is_array($report_post))
	{
		array_push($report_post,$_POST['userid']);
	}
	else
	{
		$report_post=array($_POST['userid']);
	}
	$report_userid=get_post_meta($_POST['post_id'],'socialwall_report',true );
	if(!is_array($report_userid)) $report_userid = array();
	if(!in_array($_POST['userid'], $report_userid))
	update_post_meta($_POST['post_id'],"socialwall_report", $report_post);
	
}

add_action('wp_ajax_nopriv_socialwall_dislikecount_post', 'socialwall_dislikecount_post');
add_action('wp_ajax_socialwall_dislikecount_post', 'socialwall_dislikecount_post');

add_action('wp_ajax_nopriv_socialwall_dislikecount_post', 'socialwall_dislikecount_post');
add_action('wp_ajax_socialwall_dislikecount_post', 'socialwall_dislikecount_post');

function socialwall_dislikecount_post()
{
$dislike_post=get_post_meta($_POST['post_id'],'socialwall_dislikes',true );
 
     
     

		if(is_array($dislike_post))
		{
		array_push($dislike_post,$_POST['userid']);
		}
		else
		{
		$dislike_post=array($_POST['userid']);
		}
		update_post_meta($_POST['post_id'],"socialwall_dislikes", $dislike_post);
		


}
add_action('wp_ajax_nopriv_socialwall_count_posts_like', 'socialwall_count_posts_like');
add_action('wp_ajax_socialwall_count_posts_like', 'socialwall_count_posts_like');
function socialwall_count_posts_like()
{
	
	
	$like_post=get_post_meta($_POST['post_id'],'socialwall_likes',true );
 
		if(is_array($like_post))
		{
		array_push($like_post,$_POST['userid']);
		}
		else
		{
		$like_post=array($_POST['userid']);
		}
		update_post_meta($_POST['post_id'],"socialwall_likes", $like_post);
		
}





add_action('wp_ajax_nopriv_socialwall_load_posts', 'socialwall_load_posts');
add_action('wp_ajax_socialwall_load_posts', 'socialwall_load_posts');
function socialwall_load_posts(){
global $userpro;

global $wp_query,$wpdb;
$curauth = $wp_query->get_queried_object();
$post_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'userpro_userwall' AND post_status = 'publish'");


$postperpage=$_POST['count'];

if($post_count >=$postperpage)
{
echo '<div id="userwalldata">';
        $args = array(
	'posts_per_page'   => userpro_userwall_get_option( 'totalpost' ),
	'offset'           => $postperpage,
	'category'         => '',
	'category_name'    => '',
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
<?php if($user_id[0]==get_current_user_id() || is_super_admin(get_current_user_id())) {?>
<i onclick="userwall_delete_post(<?php echo $post->ID;?> , this);" class="fa fa-trash fa-fw"></i>
</div>
<?php }?>
<div class="userwall-post-content-img" data-key="profilepicture"><a  href="<?php echo $userpro->permalink($user_id[0]); ?>" title="<?php _e('View Profile','userpro'); ?>" ><?php echo get_avatar( $user_id[0], "60" );  ?> </a></div> 

<div class="userwall-post-content" id="userwall-post-content<?php echo $post->ID?>">
				<div class="displayname"><a href="<?php echo $userpro->permalink($user_id[0]); ?>"><?php echo userpro_profile_data('display_name', $user_id[0]); ?></a>
<?php $timestamp = strtotime($post->post_date); 
$new_date = date('d-M-Y h:i', $timestamp);?>
<div class="clear"></div>
				<div class="post-date"><?php _e("Posted On ","userpro-userwall");echo $new_date;?></div>
				<div class="clear"></div><div class="content-text">

<?php 

if($post->post_title=="imgpost")
	echo '<div class="post-img"><img src="'.$post->post_content.'" style="-moz-user-select: none;
    border-radius: 10px; margin-right:10px; width: 100% !important;"></div>';
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
 $like_post=0;
 $dislike_post=0;

$like_post=get_post_meta($post->ID,'socialwall_likes',true);
$dislike_post=get_post_meta($post->ID,'socialwall_dislikes',true );
if(!is_array($like_post)) $like_post = array();
if(!is_array($dislike_post)) $dislike_post = array();
if (!in_array(get_current_user_id(), $like_post) &&  !in_array(get_current_user_id(), $dislike_post)  && is_user_logged_in() )

{

?>

<div class="userwall_postlikecount_post" id=userwall_postlikecount_post<?php echo $post->ID?>>
<i onclick="userwall_postlikecount_post(<?php echo $post->ID;?>,<?php echo get_current_user_id()?>,<?php  if(empty($like_post)) echo 0; else echo  count($like_post)?>,<?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?>);"  class="socialwall_postlikecount_post fa fa-thumbs-up btn-like-dislike"></i><i class="socialwall_postlikecount_post "><?php if(empty($like_post)) echo 0; else echo  count($like_post);?></i>
<i onclick="userwall_postdislikecount_post(<?php echo $post->ID;?>,<?php echo get_current_user_id()?>,<?php  if (empty($dislike_post)) echo 0; else echo count($dislike_post);?>,<?php if(empty($like_post)) echo 0; else echo  count($like_post);?>);"  class="socialwall_postlikecount_post fa fa-thumbs-down btn-like-dislike"></i><i class="socialwall_postlikecount_post "><?php if (empty($dislike_post)) echo 0; else echo count($dislike_post);?></i>
</div>
<!--  <div class="countlike" id="countlike<?php echo $post->ID ?>">
<br>
</div> -->
<?php }
else
{


echo '<i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-up"></i>';
?>
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
	<div class="userwall_comment_data" id="<?php echo (isset($i)) ? $i : ''; ?>"><?php
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
<?php if ( is_user_logged_in() ) {?>
<textarea id=userwall-comment-<?php echo $post->ID;?> placeholder="Enter comment and Hit ENTER to submit..."  onkeypress="user_post_comment('userwall-comment',<?php echo get_current_user_id();?>,<?php  echo $post->ID;?>,event);" name="userwall-comment"cols="40" rows="1" style="" class="comment_textarea"></textarea>
<?php }?>
</div>




</div>
<?php 


}




?>

</div>




<?php
die();

		
	}
else
{
echo "hide";
die();
}


}


add_action('wp_ajax_nopriv_post_userdata', 'post_userdata');
add_action('wp_ajax_post_userdata', 'post_userdata');

function post_userdata(){


global $userpro;
$my_post = array(
  'post_title'    => 'My post',
  'post_content'  => esc_attr(str_replace("\n","<br/>",$_POST['file_name'])),
  'post_status'   => 'publish',
  'post_type'   => 'userpro_userwall',
 
);
$post_data=wp_insert_post($my_post);
add_post_meta($post_data, 'user_id',$_POST['user_id'] );

$dislike_post=0;
$like_post=0;
$data=array(
		
		'user_profile'    => '<div class="userwall" id='.$post_data.'><div class="userwall_delete_post">
<i onclick="userwall_report_post( '.$post_data.' ,'.get_current_user_id().');" class="reportpost fa fa-exclamation-circle"></i>
<i  onclick="userwall_delete_post( '.$post_data.' , this);" class="fa fa-trash fa-fw"></i>
</div><div class="userwall-post-content-img" data-key="profilepicture"><a href="'.$userpro->permalink(get_current_user_id()).'" title="_e(\'View Profile\',\'userpro\')"> '.get_avatar( get_current_user_id(), "60" ).'</a>	</div>
		<div class="userwall-post-content"  id=userwall-post-content'.$post_data.'><div class="displayname"><a href="'.$userpro->permalink(get_current_user_id()).'"> '.userpro_profile_data('display_name', get_current_user_id()).'</a> <div class="clear"></div><div class="post-date">Posted On '.date('d-M-Y h:i').'</div><div class="clear"></div><div class="content-text">'.html_entity_decode(esc_attr(str_replace("\n","<br/>",$_POST['file_name']))).'</div></div></div> <div  class="userwall-comment-data-'.$post_data.'" id="userwall-comment">


<div class="userwall_postlikecount_post" id="userwall_postlikecount_post'.$post_data.'">
<i onclick="userwall_postlikecount_post('.$post_data.','.get_current_user_id().','.$like_post.','.$dislike_post.');" class="fa fa-thumbs-up btn-like-dislike socialwall_postlikecount_post"></i>
<i class="socialwall_postlikecount_post ">'.$like_post.'</i>
<i  onclick="userwall_postdislikecount_post('.$post_data.','.get_current_user_id().','.$dislike_post.','.$like_post.');"  class="fa fa-thumbs-down btn-like-dislike socialwall_postlikecount_post"></i><i class="socialwall_postlikecount_post ">'.$dislike_post.'</i>		
</div>
<!--<div class="countlike" id="countlike'.$post_data.'">
<br>

</div> -->

</div><div class="commenttext"> <div class="clear"></div>
		<textarea placeholder="Enter comment and Hit ENTER to submit..." id=userwall-comment-'.$post_data.' onkeypress="user_post_comment(\'userwall-comment\','.get_current_user_id().','.$post_data.',event);" name="userwall-comment"cols="40" rows="1" style="" class="comment_textarea"></textarea></div>'
);


$post_all_data=json_encode($data);

if(is_array($post_all_data)){ print_r($post_all_data); }else{ echo $post_all_data; } die;
}


add_action('wp_ajax_nopriv_post_usercomment', 'post_usercomment');
add_action('wp_ajax_post_usercomment', 'post_usercomment');

function post_usercomment(){
	global $userpro;
	
	$_POST['file_name']=str_replace("\n","<br/>",$_POST['file_name']);
$user_comment=array(
		'comment_content'  => esc_attr($_POST['file_name']),
		'comment_userid'   => $_POST['user_id'],
		'comment_date'   => date('d-m-Y'),
	);

$i=1;
add_post_meta($_POST['post_id'],'user_comment',$user_comment);
$comment_data=array(
		'user_comment'=>'<div class="userwall_comment_data" id="'.$i.'">
				<div class=userwall_delete_comment>
				<i id="delete_comment_'.$_POST['post_id'].'" onclick="userwall_delete_comment('.$_POST['post_id'].',\''.esc_attr($_POST['file_name']).'\',this);" class="fa fa-trash fa-fw-3"></i></div>
				<div class="userwall-comment-content-img" data-key="profilepicture" style="border:1px solid;border-color:#ccc"><a href="'.$userpro->permalink(get_current_user_id()).'" title=" _e(\'View Profile\',\'userpro\')">'.get_avatar( get_current_user_id(), "40" ).'</a></div>
				<div class="userwall-post-content"><div class="displayname"><a href="'.$userpro->permalink(get_current_user_id()).'">'. userpro_profile_data('display_name', get_current_user_id()).'</a></div>
				<div class="post-date post-comment-date">Commented On '.date('d-M-Y').'</div>
				<br><p>'.esc_attr($_POST['file_name']).'</p></div></div>'
		);


$comment_all_data=json_encode($comment_data);

if(is_array($comment_all_data)){ print_r($comment_all_data); }else{ echo $comment_all_data; } die;
}
		

add_action('wp_ajax_nopriv_userwall_upload_img', 'userwall_upload_img');
add_action('wp_ajax_userwall_upload_img', 'userwall_upload_img');
function userwall_upload_img()
{
	
	global $userpro;
	$my_post = array(
  'post_title'    => 'imgpost',
  'post_content'  => $_POST['src'],
  'post_status'   => 'publish',
  'post_type'   => 'userpro_userwall',

);
	$post_data=wp_insert_post($my_post);
	add_post_meta($post_data, 'user_id',get_current_user_id() );	
	
$dislike_post=0;
$like_post=0;
	$data=array(
	
			'user_profile'    => '<div class="userwall" id='.$post_data.'><div class="userwall_delete_post">
<i onclick="userwall_report_post( '.$post_data.' ,'.get_current_user_id().');" class="reportpost fa fa-exclamation-circle"></i>
<i  onclick="userwall_delete_post( '.$post_data.' , this);" class="fa fa-trash fa-fw"></i>
</div><div class="userwall-post-content-img" data-key="profilepicture"><a href="'.$userpro->permalink(get_current_user_id()).'" title="_e(\'View Profile\',\'userpro\')"> '.get_avatar( get_current_user_id(), "60" ).'</a></div>
		<div class="userwall-post-content" id=userwall-post-content'.$post_data.'><div class="displayname"><a href="'.$userpro->permalink(get_current_user_id()).'"> '.userpro_profile_data('display_name', get_current_user_id()).'</a><div class="post-date">Posted On '.date('d-M-Y h:i').'</div></div>
			<br><br> <img src="'.$_POST['src'].'" width="auto" style="-moz-user-select: none;
    border-radius: 10px;max-width:99%"> </div><div  class="userwall-comment-data-'.$post_data.'" id="userwall-comment">

<div class="userwall_postlikecount_post" id="userwall_postlikecount_post'.$post_data.'">
<i onclick="userwall_postlikecount_post('.$post_data.','.get_current_user_id().','.$like_post.','.$dislike_post.');"  class="fa fa-thumbs-up btn-like-dislike socialwall_postlikecount_post"></i> <i class="socialwall_postlikecount_post ">'.$like_post.'</i>
<i onclick="userwall_postdislikecount_post('.$post_data.','.get_current_user_id().','.$dislike_post.','.$like_post.');" class="fa fa-thumbs-down btn-like-dislike socialwall_postlikecount_post"></i><i class="socialwall_postlikecount_post ">'.$dislike_post.'</i>
</div>
<div class="countlike" id="countlike'.$post_data.'">
<br>



</div>

</div> <div class="commenttext">
<div class="clear"></div><textarea placeholder="Enter comment and Hit ENTER to submit..." id=userwall-comment-'.$post_data.' onkeypress="user_post_comment(\'userwall-comment\','.get_current_user_id().','.$post_data.',event);" name="userwall-comment"cols="40" rows="1" class="comment_textarea"></textarea></div>'
	);
	
	
	$post_all_data=json_encode($data);
	
	if(is_array($post_all_data)){ print_r($post_all_data); }else{ echo $post_all_data; } die;
	
	

	
	
}

add_action('wp_ajax_nopriv_userwall_delete_userpost', 'userwall_delete_userpost');
add_action('wp_ajax_userwall_delete_userpost', 'userwall_delete_userpost');

function userwall_delete_userpost()
{
	
	
	$list = (array)get_option('sw_reportpostid');
	$key = array_search($_POST['postid'], $list);
	unset($list[$key]);
	update_option('sw_reportpostid',$list);
	wp_delete_post($_POST['postid']);
	
}	
add_action('wp_ajax_nopriv_delete_comment', 'delete_comment');
add_action('wp_ajax_delete_comment', 'delete_comment');
function delete_comment()
{
	global $wpdb;
	$result=$wpdb->query("DELETE FROM $wpdb->postmeta WHERE meta_key = 'user_comment' and post_id=".$_POST['post_id']." and meta_value LIKE '%".$_POST['user_comment']."%'   LIMIT 1");
	
	
}
