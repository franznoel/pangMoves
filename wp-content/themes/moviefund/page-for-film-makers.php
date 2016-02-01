<?php get_header('filmmakers'); ?>
<?php add_image_size( 'makers', 500, 200, true );?>
<div class="container">
<div class="row">   
<div class="inn-testi">
<div class="col-sm-12">
        
<div id="carousel-test" class="carousel slide filmmakersCor TesCor" data-ride="carousel">

                                      

        <?php test_inner(); ?>



    <!--<div class="carousel-nav testi-indi">

    <a data-slide="prev" href="#carousel-test" class="carousel-nav-prev btn"><img src="http://adsli.com/demo/moviefund/wp-content/uploads/2015/09/test-nav-1.png" /></a>

    <a data-slide="next" href="#carousel-test" class="carousel-nav-next btn"><img src="http://adsli.com/demo/moviefund/wp-content/uploads/2015/09/test-nav-2.png" /></a>

    </div>-->


</div>
</div>
</div>
</div>
</div>

<div class="bread-bg makers-page">
<div class="container">
<div class="row">
<b><span><a href="<?php echo get_home_url(); ?>">HOME</a></span> >> <a href="<?php echo get_home_url(); ?>/for-film-makers/">For Film Makers</a></b>
</div>
</div>
</div>


<div class="makers-page" style="background: #f4f4f4;padding: 30px 0;">
<div class="container">
<h2 style="text-align: center; margin-bottom:30px">For Film Makers</h2>
<?php
global $post;   
$i = 0;
    $args = array('numberposts' => -1,'suppress_filters' => true,'pagepost_category' => 'Film Makers','post_type' => 'page_post','order' => 'ASC'
    );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) { setup_postdata($post);
?>
<div class="col-md-6">
<div class="makers-box">
 <div class="row">
     <div class="col-sm-2 col-xs-2 int-no">
        <h5><?php $i++; echo $i;?></h5>
     </div>
     <div class="col-sm-10 col-xs-10"> 
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
}wp_reset_query();

?>
</div>
</div>
</div>
<?php get_footer();?>
