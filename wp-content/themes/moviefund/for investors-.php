<?php 
/**
Template Name: For Investors
*/
get_header();?>
<?php add_image_size( 'makers', 500, 200, true );?>
<div class="makers-page" style="background: #f4f4f4;padding: 30px 0;">
<div class="container">
<div class="row">
<b><span><a href="<?php echo get_home_url(); ?>">HOME</a></span> >> <a href="<?php echo get_home_url(); ?>/for-investors/">FOR INVESTORS</a></b>
               </div>
<h2 style="text-align: center; margin-bottom:30px">For Investors</h2>
<?php
$i=0;
    $args = array('suppress_filters' => true,'pagepost_category' => 'For Investors','post_type' => 'page_post','order' => 'ASC'
    );
    $cust_loop = new WP_Query($args);
    if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post();$postcount++;
?>
<div class="col-md-6">
<div class="makers-box">
 <div class="row">
	 <div class="col-md-2 int-no">
		<h5><?php $i++; echo $i;?></h5>
	 </div>
	 <div class="col-md-10"> 
		 <h4><?php the_title(); ?></h4>	
	 </div>
 </div>
  <div class="makers-post">
    <?php the_post_thumbnail('makers'); ?>	
	<div class="maker-content">
    <?php the_content(); ?>
	</div>
</div>
</div>
</div>

<?php
endwhile;endif;wp_reset_query();

?>
</div>
</div>
</div>
<?php get_footer();?>