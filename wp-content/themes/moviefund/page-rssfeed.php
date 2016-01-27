<?php 
/* Template Name: RSS News */
get_header();?>
<div class="container">
<div class="row">
<?php if(have_posts()):?>
<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<?php the_content(); ?>

<div class="col-md-3"><div class="single_rss_column"><?php dynamic_sidebar('sidebar-77'); ?></div></div>
<div class="col-md-3"><div class="single_rss_column"><?php dynamic_sidebar('sidebar-78'); ?></div></div>
<div class="col-md-3"><div class="single_rss_column"><?php dynamic_sidebar('sidebar-79'); ?></div></div>
<div class="col-md-3"><div class="single_rss_column"><?php dynamic_sidebar('sidebar-80'); ?></div></div>
<?php endwhile; endif;?>
</div>
</div>
<?php get_footer();?>