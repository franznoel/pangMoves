<?php get_header(); ?>
<div class="content profile-page">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="lo" style="padding: 10px 0px;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php

        if ( is_user_logged_in()) {
          global $current_user;
        echo '<a class="wppb-logout-url" title="Log out of this account" href="http://adsli.com/demo/moviefund/wp-login.php?action=logout&redirect_to=http%3A%2F%2Fadsli.com%2Fdemo%2Fmoviefund%2Fprofile%2F&_wpnonce=3c49cd6a65">Log out »</a> '.' <br />';
        echo "View"." ".'<a href="http://adsli.com/demo/moviefund/userprofile/">'.$current_user->user_login.'</a>';
          get_currentuserinfo();
          $args=array(
            'author' => $current_user->ID,
            'post_type' => 'latestprojects',
            'post_status' => 'publish',
            'posts_per_page' => -1
          );
          $my_query = null;
          $my_query = new WP_Query($args); 
        ?>
          <div class="row">
            <h2>All Posts</h2>
            <div class="operator">
              <h4><a target="_blank" href="http://adsli.com/demo/moviefund/fnewpos">Add New post</a></h4>
              <?php
              $del_id= $_GET['$del'];
               echo $del_id;?>
            </div>
            <div class="col-md-6">
              <div class="pst-tl"><h4>Post Title</h4></div>
            </div>
            <div class="col-md-2">
              <div class="operator"><h4>View</h4></div>
            </div>
            <div class="col-md-2">
              <div class="operator"><h4>Edit</h4></div>
            </div>
            <div class="col-md-2">
              <div class="operator"><h4>Delete</h4></div>
            </div>
          </div>
          <div class="row">
          <?php
            if( $my_query->have_posts() ) {
               while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-md-6">
                <div class="pst-tl">
                <?php the_title(); ?>
                </div>
                </div>
                <div class="col-md-2"><div class="operator"><a target="_blank" href="<?php the_permalink(); ?>">View</a></div></div>
                <div class="col-md-2"><div class="operator"><a target="_blank" href="<?php echo get_permalink('551'); ?>?id=<?php echo get_the_ID();?>">Edit</a></div></div>
                <div class="col-md-2"><div class="operator"><a href="<?php echo get_permalink('556'); ?>?id=<?php echo get_the_ID();?>">Delete</a></div></div>
           
                <?php
              endwhile;
            } else {
              echo '<h3><b>'."Sorry you have no post to view".'</b></h3>';
            }
            wp_reset_query();
          } else {
            echo '<a href="http://localhost/movie/film-maker/">'."Dont have account?".'</a>';
            wp_redirect( "http://adsli.com/demo/moviefund/login/" ); exit;
          }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>