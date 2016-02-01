<?php get_header();?>
<!--CEO-->
<div class="cat-padd">
<div class="container">
	<div class="row">
     <center><h2>Team</h2></center>
     <?php
	 $i= 0;
	 $args= array('numberposts' => 1,'post_type' => 'teampartners','teampartners_category' => 'CEO');
    $new = new WP_Query($args);
	$getpost = get_posts($args);
	$count= count($getpost);
	
    while ($new->have_posts()) : $new->the_post(); $count++;?>
<div class="col-md-4 col-md-offset-4"style="padding-bottom:25px;">
<?php $image3 = get_field('profile_background');?>

<div class="colm2" style="width:100%; background-image:url(<?php echo $image3['url'];?>);background-size: 100% 140px;">

    <div class="team-postthum">
    <center><?php the_post_thumbnail('part-ners',array('class'=>"part-tmimg"));?></center>
    </div>
	<center><h4><?php the_title();?></h4><h5><?php the_field( "job" );?></h5></center>
    <div class="team-post-conts">
    <center><?php the_content(); ?></center>
		<div class="movie-posters">
			<div class="row">
				<?php 
					$image1 = get_field('movie_poster1'); 
					$image2 = get_field('movie_poster2');
				?>
				<?php if( !empty($image1) || !empty($image2) ): ?>
					<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image1['url']; ?>"/></center>
					</div>
					<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image2['url']; ?>"/></center>
					</div>
				<?php endif; ?>
			</div>
		</div>
    </div>
</div>
</div>
   <?php endwhile;
	?>
</div>
</div>
</div>

<!--CFOs-->
<div class="cat-padd">
<div class="container">
<div class="row">
    <?php
	$i= 0;
	$args= array('posts_per_page' => 2,'post_type' => 'teampartners','teampartners_category' => 'CFOs');
    $new = new WP_Query($args);
	$getpost = get_posts($args);
	$count= count($getpost);
	
    while ($new->have_posts()) : $new->the_post(); $count++;?>
<div class="col-md-6" style="padding-bottom:25px;">
<?php $image3 = get_field('profile_background'); ?>
<div class="colm2" style="background-image:url(<?php echo $image3['url']; ?>);background-size: 100% 140px;">
    <div class="team-postthum">
    <center><?php the_post_thumbnail('part-ners',array('class'=>"part-tmimg"));?></center>
    </div>
	<center><h4><?php the_title(); ?></h4><h5><?php the_field( "job" );?></h5></center>
	<div class="team-post-conts">
		<center><?php the_content(); ?></center>		
		<div class="movie-posters">
			<div class="row">
				<?php 
				$image1 = get_field('movie_poster1'); 
				$image2 = get_field('movie_poster2');
				?>
				<?php if( !empty($image1) || !empty($image2) ): ?>
				<div class="col-sm-6 col-xs-12 team-xsim">
				<center><img src="<?php echo $image1['url']; ?>"/></center>
				</div>
				<div class="col-sm-6 col-xs-12 team-xsim">
				<center><img src="<?php echo $image2['url']; ?>"/></center>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</div>
   <?php endwhile;
	?>
</div>
</div>
</div>

<div class="cat-padd">
<div class="container">
<div class="row">
     <?php
	 $i= 0;
	 $args= array('numberposts' => -1,'post_type' => 'teampartners','teampartners_category' => 'Team');
    $new = new WP_Query($args);
	$getpost = get_posts($args);
	$count= count($getpost);
	
    while ($new->have_posts()) : $new->the_post(); $count++;?>
	<div class="col-md-4" style="padding-bottom:25px;">
	<?php $image3 = get_field('profile_background'); ?>
		<div class="colm2" style="width:100%; background-image:url(<?php echo $image3['url']; ?>);background-size: 100% 140px;">
			<div class="team-postthum">
					<center><?php the_post_thumbnail('part-ners',array('class'=>"part-tmimg"));?></center>
				 
					<center><h4><?php the_title(); ?></h4><h5><?php the_field( "job" );?></h5></center>
				<div class="team-post-conts">
					<center><?php the_content(); ?></center>
					<div class="movie-posters">
						<div class="row">
						<?php 
						$image1 = get_field('movie_poster1'); 
						$image2 = get_field('movie_poster2');
						?>
						<?php if( !empty($image1) || !empty($image2) ): ?>
						<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image1['url']; ?>"/></center>
						</div>
						<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image2['url']; ?>"/></center>
						</div>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   <?php endwhile; ?>
<div class="col-md-4 plusimg">
<center>
<img src="http://adsli.com/demo/moviefund/wp-content/uploads/2015/10/plussign.jpg">
</center>
</div>
</div>
</div>
</div>

<!--Partners-->
<div class="cat-padd">
<div class="container">
<div class="row">
     <center><h2>Partners</h2></center>
     <?php
	 $args= array('numberposts' => -1,'post_type' => 'teampartners','teampartners_category' => 'Partners');
    $new = new WP_Query($args);
	$getpost = get_posts($args);
	$count= count($getpost);

    while ($new->have_posts()) : $new->the_post(); $count++;?>
	<div class="col-md-3" style="padding-bottom:25px;">
	<?php $image3 = get_field('profile_background'); ?>
		<div class="colm2" style="width:100%; background-image:url(<?php echo $image3['url']; ?>);background-size: 100% 140px;">
			<div class="team-postthum">
				<center><?php the_post_thumbnail('part-ners',array('class'=>"part-tmimg"));?></center>
				<center><h4><?php the_title(); ?></h4><h5><?php the_field( "job" );?></h5></center>
				<div class="team-post-conts partners-cont">
				<center><?php the_content(); ?></center>
				
				<div class="movie-posters">
					<div class="row">
						<?php 
						$image1 = get_field('movie_poster1'); 
						$image2 = get_field('movie_poster2');
						?>
						<?php if( !empty($image1) || !empty($image2) ): ?>
						<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image1['url']; ?>"/></center>
						</div>
						<div class="col-sm-6 col-xs-12 team-xsim">
						<center><img src="<?php echo $image2['url']; ?>"/></center>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
   <?php endwhile;	?>
<div class="col-md-3 plus-img">
<center>
<img src="http://adsli.com/demo/moviefund/wp-content/uploads/2015/10/plussign.jpg">
</center>
</div>
</div>
</div>
</div>


<?php get_footer(); ?>