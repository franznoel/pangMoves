<?php 
/*
 * Template Name: Update Info
 *
 */
get_header();?>
<style>
.post-insert label {
    width: 144px;
}
.post-insert input[type="file"]{display: inline;}
</style>
<div class="content update-page">
<div class="container">
<div class="row">
<h2>Update Post</h2>
<?php 
global $post;	
$id = $_GET['id'];
$post = get_post( $id );
setup_postdata($post);
?>

<?php 
if(isset($_POST['update'])){
 
$my_post = array(
  'post_type' => 'latestprojects',
  'post_title'    => wp_strip_all_tags( $_POST['movie-title'] ),
  'post_content'  => $_POST['movie-story'],
  'post_status'   => 'publish'

);
$post_id = wp_update_post($my_post);
update_post_meta( $post_id, 'budget', $_POST['meta']['budget']);
update_post_meta( $post_id, 'genre', $_POST['meta']['genre']);

}
?>

<div class="post-insert">
<form method="post" action="">
<fieldset>
<label>Movie Title</label><input type="text" name="movie-title" class="movi-field" value="<?php the_title(); ?>" /><br />
<!--<label>Movie Image</label><input type="file" name="movie-image" class="movi-field"><br />-->
<label>Story</label><textarea name="movie-story" class="story-area" cols="50" rows="5"><?php echo get_the_content(); ?></textarea><br />
<label>Budget</label><input type="text" name="meta[budget]" class="movi-field" value="<?php the_field( "budget" );?>" ><br />
<label>Genre</label><input type="text" name="meta[genre]" class="movi-field" value="<?php the_field( "genre" );?>"><br />
<!--<label>Trailer</label><input type="file" name="movie-trailer" class="movi-field"><br />-->
</fieldset>
<input type="submit" name="update" class="btn btn-4" value="Update">
</form>
</div>

</div>
</div>
</div>
<?php get_footer();?>