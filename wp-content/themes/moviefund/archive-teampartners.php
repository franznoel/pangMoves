<?php get_header('social'); ?>
<div id="container">
    <div id="content" role="main">
        <?php the_post(); ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <h2>Archives by Subject:</h2>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>