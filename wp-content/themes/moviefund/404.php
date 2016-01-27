<?php

get_header(); ?>
<div class="content" style="margin-bottom: 25px;">
<div class="container">
<div class="row">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'weka' ); ?></h1>
			</header>

					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'weka' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'weka' ); ?></p>

					<?php get_search_form(); ?>

</div>
</div>
</div>
<?php get_footer(); ?>