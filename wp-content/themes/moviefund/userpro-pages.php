<?php
/*
Template Name: Userpro Pages
*/


get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" style="text-align:center;">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="container movie-page">
		<?php the_content(); ?>
		</div>
		
		
	</div><!-- .entry-content -->



</article><!-- #post-## -->

<?php get_footer();?>