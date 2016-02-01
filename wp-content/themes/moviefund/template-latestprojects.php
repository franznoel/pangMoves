<?php 
/**
 * Template Name: Latest Projects
 *
 */


get_header();?>

<div class="content">
<div class="movi-ttl">
<div class="container">
    <div class="row">
    <div class="col-md-12"><h4 class="h4_title">SEARHC FOR MOVIES:</h4></div>
    </div>
    <div class="row" style="margin-top:40px;" >
    <div class="col-md-12">
    <div class="serch-fiel">
    <ul>
    <li>
<h1>Project Type</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Genre</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Budget</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Production State</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Featured</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Type of Investment</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>
    <li>
<h1>Level of Investment</h1>
<select>
  <option selected>Protfolio</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
  <option >Load Movie</option>
  <option >Goto Frame</option>
  <option >get URL</option>
</select>
	</li>

	</ul>
    </div>
    </div>
    </div>
</div>

<div class="slider-holder">
<span style="font:normal 16px arial;">LATEST MOVIES</span>
<ul>
<?php 
global $wpdb;
$move_rows = $wpdb->get_results( "SELECT ID, post_title, guid FROM movie_posts WHERE post_type = 'latestprojects' AND post_status = 'publish' ORDER BY ID DESC" );
$gate = 1;
foreach( $move_rows as $key => $row) { 
$row = get_object_vars($row);
$movie_url = $row['guid'];
$thumbnail = wp_get_attachment_url(get_post_meta($row['ID'], '_thumbnail_id', true));
?>
<li <?php echo ($gate > 5)? 'style="display:none;"' : '';?>>
<a href="<?php echo $movie_url;?>" target="_blank">
<div class="mov_banner" style="background:url(<?php echo $thumbnail; ?>) no-repeat center center;background-size:cover;">
<div style="position:relative;height:100%;"><p><?php echo $row['post_title']; ?></p></div></div></a></li>
<?php 
$gate++;
} ?>
</ul>
<i id="l_btn" class="fa fa-chevron-circle-left arr_inact"></i>
<i id="r_btn" class="fa fa-chevron-circle-right"></i>
</div>
<div class="slider-holder2">
<span style="font:normal 16px arial;">POPULAR GENRES</span>
<ul>
<li><a href="#" target="_blank"><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/western.png) no-repeat center center;background-size:cover;"></div></a></li>
<li><a href="#" target="_blank"><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/suspense.png) no-repeat center center;background-size:cover;"></div></a></li>
<li><a href="#" target="_blank"><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/mystery.png) no-repeat center center;background-size:cover;"></div></a></li>
<li><a href="#" target="_blank"><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/mini_series.jpg) no-repeat center center;background-size:cover;"></div></a></li>
<li><a href="#" target="_blank"><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/action.png) no-repeat center center;background-size:cover;"></div></a></li>
</ul>
<i id="l_btn" class="fa fa-chevron-circle-left arr_inact"></i>
<i id="r_btn" class="fa fa-chevron-circle-right arr_inact"></i>
</div>
</div>
<div class="project-holder text-center" id="Projects">

<div class="container">
<div class="movies-latt">
<?php if(have_posts()):?>
<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif;?>
<div class="row">

<?php
global $post;
    $args = array('suppress_filters' => true,'post_type' => 'latestprojects','posts_per_page' => -1,'order' => 'ASC'
    );
    $cust_loop = new WP_Query($args);
    if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post();$postcount++;
$meta = get_post_meta(get_the_id());
$key_1_values = get_post_meta( get_the_ID(), '' ,true );

$field = get_field_object('budget');
$field1 = get_field_object('genre');
$field2 = get_field_object('compares');
$field3 = get_field_object('tax_breaks');
$field4 = get_field_object('team');
$field5 = get_field_object('cast');
$field6 = get_field_object('investor_info');
$field7 = get_field_object('target');
$field8 = get_field_object('invested');
$field9 = get_field_object('pledged');
$field10 = get_field_object('investers');
?>
    <div class="col-sm-6 col-md-3">
	<div class="pro-box">
	<div class="img-thumb">
	<h4><?php the_title(); ?></h4><br />
	
	<a target="_blank" href="<?php print_r($meta[link][0]);?>"><?php the_post_thumbnail('latest-pro',array('class' => "img-responsive")); ?></a>
    </div>
	<div class="pro-content">
	  <p><?php echo substr(get_the_content(), 0, 80); ?><span class="remore" data-mode="hide" data-id="re-<?php echo get_the_ID();?>">read more...</span> </p>
      <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>          
	 </div>
<div class="pro-table margin-t">
<div class="scrollbars">
<div class="table">


<div class="latst-filds">

<div class="orange"><?php echo $field['label']; ?></div>
<div class="fild-st"><?php the_field( "budget" );?></div>

</div>

<div class="latst-filds">
<div class="orange"><?php echo $field1['label']; ?></div>
<div class="fild-st"><?php the_field( "genre" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field2['label']; ?></div>
<div class="fild-st"><?php the_field( "compares" );?></div>
</div>


<div class="latst-filds">
<div class="orange"><?php echo $field3['label']; ?></div>
<div class="fild-st"><?php the_field( "tax_breaks" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field4['label']; ?></div>

<div class="fild-st"><?php the_field( "team" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field5['label']; ?></div>
<div class="fild-st"><?php the_field( "cast" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field6['label']; ?></div>
<div class="fild-st"><?php the_field( "investor_info" );?></div>
</div>

</div>
</div>
<div class="lig gh-<?php echo get_the_ID();?>">

<?php 

$grap = get_field('graph'); 

?>

<?php if( !empty($grap) ): ?>

<img src="<?php echo $grap['url']; ?>"/>

<?php else: ?>

<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />

<?php endif; ?>
</div>

</div>

<div class="pro-bottom">
<ul class="list-inline">
<li>
<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>
</li>
<li><a href="#"><span><?php the_field( "target" );?></span><br/> <?php echo $field7['label']; ?></a></li>
<li><a href="#"><span> <?php the_field( "invested" );?></span><br/><?php echo $field8['label']; ?></a></li>
<li><a href="#"><span><?php the_field( "pledged" );?></span> <br/><?php echo $field9['label']; ?></a></li>
<li><a href="#"><span><?php the_field( "investers" );?></span> <br/><?php echo $field10['label']; ?></a></li>
</ul>
</div>

	</div>
    </div>

<?php
endwhile;endif;wp_reset_query();
?>
</div>
</div>
</div>
</div>
</div>
<script>
var $p = jQuery;
$p('.slider-holder > i#r_btn').click(function() {
if (!$p(this).hasClass('arr_inact')) {
var $t_obj = $p('.slider-holder > ul').find('li:visible:first');
var $t_ind = $t_obj.index();
var $l_ind = $p('.slider-holder > ul').find('li:last').index();
if($t_ind == 0) {
$p('.slider-holder > i#l_btn').removeClass('arr_inact');
}
if (($t_ind + 5) == $l_ind) {
$p(this).addClass('arr_inact');
}
$t_obj.hide();
var $t_ind = $t_ind + 5;
$p('.slider-holder > ul > li:eq('+$t_ind+')').show();

}
});

$p('.slider-holder > i#l_btn').click(function() {
if (!$p(this).hasClass('arr_inact')) {
var $t_obj = $p('.slider-holder > ul').find('li:visible:last');
var $t_ind = $t_obj.index();
var $l_ind = $p('.slider-holder > ul').find('li:last').index();
if($t_ind == $l_ind) {
$p('.slider-holder > i#r_btn').removeClass('arr_inact');
}
if ($t_ind == 5) {
$p(this).addClass('arr_inact');
}

$t_obj.hide();
var $s_ind = $t_ind - 5;
$p('.slider-holder > ul > li:eq('+$s_ind+')').show();
}
});
$p('.slider-holder2 > i#r_btn').click(function() {
if (!$p(this).hasClass('arr_inact')) {
var $t_obj = $p('.slider-holder2 > ul').find('li:visible:first');
var $t_ind = $t_obj.index();
var $l_ind = $p('.slider-holder2 > ul').find('li:last').index();
if($t_ind == 0) {
$p('.slider-holder2 > i#l_btn').removeClass('arr_inact');
}
if (($t_ind + 5) == $l_ind) {
$p(this).addClass('arr_inact');
}
$t_obj.hide();
var $t_ind = $t_ind + 5;
$p('.slider-holder2 > ul > li:eq('+$t_ind+')').show();

}
});

$p('.slider-holder2 > i#l_btn').click(function() {
if (!$p(this).hasClass('arr_inact')) {
var $t_obj = $p('.slider-holder2 > ul').find('li:visible:last');
var $t_ind = $t_obj.index();
var $l_ind = $p('.slider-holder2 > ul').find('li:last').index();
if($t_ind == $l_ind) {
$p('.slider-holder2 > i#r_btn').removeClass('arr_inact');
}
if ($t_ind == 5) {
$p(this).addClass('arr_inact');
}

$t_obj.hide();
var $s_ind = $t_ind - 5;
$p('.slider-holder2 > ul > li:eq('+$s_ind+')').show();
}
});
</script>
<?php get_footer();?>