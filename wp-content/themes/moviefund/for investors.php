<?php 
/**
Template Name: For Investors(Select) 
*/
get_header();?>
<?php add_image_size( 'makers', 860, 300, true );?>
<div class="container">
<div class="row">	
<div class="inn-testi">
<div class="col-sm-12">
        
<div id="carousel-test" class="carousel slide filmmakersCor TesCor" data-ride="carousel">

                   

		<?php test_inner(); ?>

</div>
</div>
</div>
</div>
</div>

<div class="bread-bg makers-page">
<div class="container">
<div class="row">
<b><span><a href="<?php echo get_home_url(); ?>">HOME</a></span> >> <a href="<?php echo get_home_url(); ?>/for-investors/">For Investors</a></b>
</div>
</div>
</div>

<div class="makers-page" style="background: #f4f4f4;padding: 30px 0;">
<div class="container">
<h2 style="text-align: center; margin-bottom:30px">For Investors</h2>
<div class="row">
<div class="col-md-8">
<div class="row invst-rw">
<?php
global $post;	
$i = 0;
    $args = array('numberposts' => -1,'suppress_filters' => true,'pagepost_category' => 'for-investors','post_type' => 'page_post','order' => 'ASC'
    );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) { setup_postdata($post);
?>
<div class="col-md-12">

	 <h3><?php the_title(); ?></h3>	
<div class="sm-rw">
<div class="row">
<div class="col-md-6">
<div class="pst-date">
<p>By <span><?php the_author(); ?></span> <?php the_time('j F Y'); ?></p>
</div>
</div>
<div class="col-md-6">
<ul class="sm-icons">
<li><a href=""><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/10/smtw.png"></a></li>
<li><a href=""><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/10/smgp.png"></a></li>
</ul>
</div>
</div>
</div>
<div class="invst-thum">
    <?php the_post_thumbnail('makers',array('class' => "img-responsive")); ?>	
</div>
<div class="invst-cont">
    <?php the_content(); ?>
</div>
</div>

<?php
}wp_reset_query();

?>
</div>
</div>

<div class="col-md-4">

<!--
<div class="side-bars boredr-bttm">
<div class="cat-invs">
<?php dynamic_sidebar('sidebar-6'); ?>
</div>
</div>
-->

<div class="side-bars">
<div class="lat-est">

<!--
<h4>Latest Posts</h4>
<div class="commn-side">
<?php dynamic_sidebar('sidebar-3'); ?>
</div>
-->

<div class="commn-side">
<?php dynamic_sidebar('sidebar-4'); ?>
</div>
<div class="commn-side">
<?php dynamic_sidebar('sidebar-5'); ?>
</div>
</div>
</div>

<div class="side-bars boredr-tobt">
<div class="cat-invs">
<?php dynamic_sidebar('sidebar-16'); ?>
</div>
</div>

<div class="side-bars invt-padd">
<div class="cat-invs">
<?php dynamic_sidebar('sidebar-17'); ?>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
<?php get_footer();?>