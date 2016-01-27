<?php get_header();
 
global $post;	
$id = $_GET['id'];
//$post_id = get_post( $id );

if(wp_delete_post($id)){
$del= "Post deleted";
wp_redirect( "http://adsli.com/demo/moviefund/profile/?$del" ); exit;
}

get_footer();?>