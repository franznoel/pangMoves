<?php get_header();?>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
<?php if(have_posts()):?>
<?php while ( have_posts() ) : the_post(); ?>
<h2 class="text-center" style="margin-bottom: 20px;"><?php the_title();?></h2>
<div class="left-img">
<?php the_post_thumbnail('part-ners',array('class'=>"part-tmimg"));?>
</div>
<?php the_content(); ?>
<?php endwhile; endif;?>
</div>
</div>
</div>
</div>
</br />
<?php get_footer();?>