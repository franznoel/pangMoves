<?php 
/**
 * Template Name: User Projects
 *
 */
get_header();?>

<div class="content">
<div class="movi-ttl">
<div class="container">
    <div class="row">
    <div class="col-md-12"><h4>SEARCH FOR MOVIES:</h4></div>
    </div>
    <div class="row">
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
<ul>
<li>
<a href=""><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/mini_series.jpg) no-repeat center center;background-size:cover;"></div></a></li><li>
<a href=""><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/mystery.png) no-repeat center center;background-size:cover;"></div></a></li><li>
<a href=""><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/suspense.png) no-repeat center center;background-size:cover;"></div></a></li><li>
<a href=""><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/western.png) no-repeat center center;background-size:cover;"></div></a></li><li>
<a href=""><div class="mov_banner" style="background:url(http://themoviefund.com/newtheme/wp-content/uploads/2015/12/action.png) no-repeat center center;background-size:cover;"></div></a>
</li>

</ul>
<!-- <i id="l_btn" class="fa fa-chevron-circle-left arr_inact" style="left:20px;top:calc(50% - 30px);"></i>
<i id="r_btn" class="fa fa-chevron-circle-right" style="right:20px;top:calc(50% - 30px);"></i> -->
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
    $args = array('suppress_filters' => true,'post_type' => 'UserProject','posts_per_page' => -1,'order' => 'ASC'
    );
    $cust_loop = new WP_Query($args);
    if ($cust_loop->have_posts()) : while ($cust_loop->have_posts()) : $cust_loop->the_post();$postcount++;
		
	$meta = get_post_meta(get_the_id());
	$key_1_values = get_post_meta( get_the_ID(), '' ,true );

	$field = get_field_object('budget');
	$field1 = get_field_object('genre');
	$field11 = get_field_object('production_stage');
	$field2 = get_field_object('compares');
	$field3 = get_field_object('tax_breaks');
	$field4 = get_field_object('team');
	$field5 = get_field_object('cast');
	$field6 = get_field_object('investor_info');
	$field7 = get_field_object('target');
	$field8 = get_field_object('invested');
	$field9 = get_field_object('soft');
	$field10 = get_field_object('investers');
	
	$user_ID = get_the_author_id();
	$select_financ = get_user_meta($user_ID,'select_financ',true);
	$select_creative = get_user_meta($user_ID,'select_creative',true);
	$finance_package = get_user_meta($user_ID,'finance_package',true);
	$creative_package = get_user_meta($user_ID,'creative_package',true);
	$add_image = get_user_meta($user_ID,'add_image',true);
	$u_vid = false;
	$u_vid = userpro_profile_data('video', $user_ID);
	?>
    <div class="col-sm-6 col-md-3 <?php echo $user_ID;?>">
	<div class="pro-box">
	<div class="img-thumb">
	<h4><?php the_title(); ?></h4><br />
	
	
			  

	<?php if($u_vid){ ?>
	<a target="_blank" href="<?php echo $u_vid; ?>">
	<div class="imgcon">
	<div class="back-video">
	<img class="img_vid" foo-id="<?php echo $user_ID;?>" src="<?php echo $add_image; ?>" width="200px">
	</div>
	<div class="play_video">
	<img src="<?php echo get_home_url();?>/wp-content/uploads/genericvideoicon.jpg">
	</div>
	</div>

	</a>
	
	<?php }	else{ ?>
		<a target="_blank" href="<?php print_r($meta[link][0]);?>"><img src="<?php echo $add_image; ?>" ></a>	
	<?php } ?>
	
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
			<div class="orange"><?php echo $field11['label']; ?></div>
			<div class="fild-st"><?php the_field( "production_stage" );?></div>
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
			
			<div class="latst-filds">
				<div class="orange">Financial Package</div>
				<?php
					$select_financ	= strtolower($select_financ);
					$link1 			= pathinfo($finance_package);
					$link_ext1		= $link1['extension']; 
				?>
				<?php if( $select_financ == 'preview' && $link_ext1 == 'pdf' ){ ?>
					<div class="fild-st"><a href="<?= $finance_package; ?>"  target="_blank" <?= ($select_financ=='download')?'download':'';?>>Preview</a></div>
				<?php } elseif( $select_financ == 'download' && ( $link_ext1 == 'pdf' || $link_ext1 == 'doc' || $link_ext1 == 'docx' ) ){ ?>
					<div class="fild-st"><a href="<?= $finance_package; ?>"  target="_blank" <?= ($select_financ=='download')?'download':'';?>>Download</a></div>
				<?php }else{  
					echo 'Not Available';
				}?>
			</div>
			<div class="latst-filds">
				<div class="orange">Creative Package</div>
				<?php
					$select_creative	= strtolower($select_creative);
					$link2 			= pathinfo($creative_package);
					$link_ext2		= $link2['extension']; 
				?>
				<?php if( $select_creative == 'preview' && $link_ext2 == 'pdf' ){ ?>
					<div class="fild-st"><a href="<?= $finance_package; ?>"  target="_blank" <?= ($select_financ=='download')?'download':'';?>>Preview</a></div>
				<?php } elseif( $select_creative == 'download' && ( $link_ext2 == 'pdf' || $link_ext2 == 'doc' || $link_ext2 == 'docx' ) ){ ?>
					<div class="fild-st"><a href="<?= $finance_package; ?>"  target="_blank" <?= ($select_financ=='download')?'download':'';?>>Download</a></div>
				<?php }else{  
					echo 'Not Available';
				}?>
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
<li><a href="#"><span><?php the_field( "soft" );?></span> <br/><?php echo $field9['label']; ?></a></li>
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
</script>


<?php get_footer();?>