<?php 
/**
 * Template Name: About us
 *
 */
 get_header(); ?>
<div class="content about-page">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12 abt-clt">
            	<h5>Our Clients</h5>
                <p>
                The Movie Fund Client base consists of the industry's major studios, production companies, networks, and individuals.  Our solutions cater to all positions and levels of the industry.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="abt-layout">
                <div class="col-sm-8">
					 <?php 
                     global $post;	
                    
                    $i = 1;
					
                    
                        
                    
                        $args = array('suppress_filters' => true,'post_type' => 'post','category' => '37','order' => 'ASC'
                    
                        );
                    
                        $myposts = get_posts( $args );
						
                    
                        foreach( $myposts as $post ) { setup_postdata($post);
                    
                    ?>
                    <?php if($i % 2 == 0){?>
						<div class="row">
                        <?php }?>
                            <div class="col-sm-6">
                                <div class="abt-main-cnt">
                                    <h4><?php the_title(); ?></h4>
                                    <?php the_content(); ?>
                                </div>
                             </div>  
                         <?php if($i % 2 == 0){?>                          
                        </div>
                        <?php }?>
                    
                    <?php
                    
                        $i++;
						}wp_reset_query();
                    
                    ?>

                 </div>
                <div class="col-sm-4">
                	<div class="abt-sidebar abt-main-cnt">
                    	<h4>Film Festivals</h4>
                        <p>
                        Film festival clients use our industry leading contact rolodex as a reference for the most current contact information as well as a means to find robust biographies and credit histories of any festival participants. The Studio System tracks in competition and screening titles for more than 40 worldwide film festivals.
                        </p>
                	</div>
                	<div class="abt-sidebars abt-main-cnt" style="margin-top: 60px;">
                    	<h4>Film Schools</h4>
                        <p>
                        We partner with the world's top film schools to provide access to the next generation of executives, filmmakers and content creators. We help students get the inside track to the same information that industry professionals already rely on. Whether as a complement to their course work or as a tool to help develop their next project, The Studio System gives them a leg up in jumpstarting their entertainment career.
                        </p>
                	</div>
                </div>
             </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>