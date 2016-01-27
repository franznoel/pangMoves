<?php get_header();?>
<style>
.post-insert label {
    width: 144px;
}
.post-insert input[type="file"]{display: inline;}
</style>
<div class="container">
<div class="row">
<h2>Register & Login</h2>
<div class="col-md-6">
<div class="login-page">
<?php if ( is_user_logged_in() ) {	
wp_redirect( "http://adsli.com/demo/moviefund/profile/" ); exit;
}
else{
	echo do_shortcode('[wppb-login]'); ?>
<a href="adsli.com/demo/moviefund/film-maker/" class="">Don't have a account? </a>
	<?php }
?>
</div></div></div></div>
<?php get_footer();?>