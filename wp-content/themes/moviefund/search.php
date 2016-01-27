<?php get_header();?>
    <div class="holder">
      <div class="holder-top">
    	<div class="container">
          <div class="about-holder">
            	<div class="row">
                	<div class="col-sm-12">
                    	<div class="heading">
                              <h2>Search Results</h2>
                           </div>
                     
                        <div class="post-loop">
						<?php if(have_posts() ){
                            while( have_posts() ){ the_post();?>
                        	<div class="post">
                            	<div class="row">
                                    <div class="col-lg-12">
                                    	<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <p class="date"><?php echo get_the_date( 'M d, Y' );?></p>
                                        <?php the_excerpt();?>
                                        <a href="<?php the_permalink();?>" class="btn btn-info">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php }
							}else{?>
                            
                            	<p>No Results found</p>
                                
                            <?php }?>
                        </div>
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'spca' ) ); ?></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </div>
<?php get_footer();?>