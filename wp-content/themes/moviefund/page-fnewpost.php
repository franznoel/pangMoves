<?php get_header();?>
<style>
.post-insert label {
    width: 144px;
}
.post-insert input[type="file"]{display: inline;}
</style>
<div class="container">
<div class="row">
<h2>Add New Post</h2>
<div class="col-md-6">
<div class="login-page">
<?php echo do_shortcode('[wppb-login]'); ?>

<?php if ( is_user_logged_in() ) {
	    $current_user = wp_get_current_user();
		$user_id = get_current_user_id();

    echo 'Welcome ' . $current_user->user_firstname . '!'.'<br />';
	?>
<?php 
if(isset($_POST['publish'])){
 
$my_post = array(
  'post_type' => 'latestprojects',
  'post_title'    => wp_strip_all_tags( $_POST['movie-title'] ),
  'post_content'  => $_POST['movie-story'],
  'post_status'   => 'publish'

);
$metag= $_POST['meta']['genre'];
//wp_insert_post( $my_post );
$post_id = wp_insert_post($my_post);
add_post_meta( $post_id, 'budget', $_POST['meta']['budget']);
add_post_meta( $post_id, 'genre', $_POST['meta']['genre']);

echo '<h3>'."Post added successfully".'</h3>';
}

?>
<div class="post-insert">
<form method="post" action="">
<fieldset>
<label>Movie Title</label><input type="text" name="movie-title" class="movi-field"><br />
<!--<label>Movie Image</label><input type="file" name="movie-image" class="movi-field"><br />-->
<label>Story</label><textarea name="movie-story" class="story-area" cols="50" rows="5"></textarea><br />
<label>Budget</label><input type="text" name="meta[budget]" class="movi-field"><br />
<label>Genre</label><input type="text" name="meta[genre]" class="movi-field"><br />
<!--<label>Trailer</label><input type="file" name="movie-trailer" class="movi-field"><br />-->
</fieldset>
<input type="submit" name="publish" class="btn btn-4" value="Publish">
</form>
</div>
<?php
}//else{
	//echo "not login";	
	//}
 ?> 
 </div>
</div>
</div>
</div>
<?php get_footer();?>