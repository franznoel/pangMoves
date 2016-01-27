<?php get_header();?>
<div class="container">
<div class="row">
<?php if(have_posts()):?>
<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<?php the_content(); ?>
<?php endwhile; endif;?>
</div>
</div>
<?php get_footer();?>