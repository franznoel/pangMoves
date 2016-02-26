<?php get_header();?>      
<div class="welcome-holder" id="about">
    <div class="container">
        <?php Welcome(); ?>
    </div>
</div>
<br/>
<div class="invest-holder_news text-center">
	<div class="container">
        <div class="news_ticker_section">
            <?php echo do_shortcode('[jquery_latest_news_ticker postid="3248"]  ');?>
        </div>
    </div>
</div>

<div class="invest-holder text-center">
	<div class="container">
        <?php 
            $args = array('post_type'=>'news','posts_per_page'=>4); 
            $loop = new WP_Query( $args );
        ?>
        <style type="text/css">
        #news .news-title {min-height:70px;font-size:20px;}
        #news .news-image {height:100px;}
        #news .news-content {}
        </style>
        <div id="news" class="row">
            <?php 
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<div class="col-md-3">';
                  echo '<h2 class="news-title">' . get_the_title($post->ID) . '</h2>';
                  echo '<img class="news-image" src="' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '" alt="' . get_the_title($post->ID) . '" style="width:100%"/>';
                  echo '<p class="news-content">' . get_the_content($post->ID) . '</p>';
                  echo '</div>';
                endwhile;
            ?>
        </div>
		
	<br/><br/>
	<?php get_template_part('part','invest'); ?><br/>
	</div>
</div>
<div class="blue-holder">
	<div class="container">
	<div class="row">
	<div class="col-sm-3 col-xs-12">
	<br/>
		<h3>looking to invest?</h3>
	</div>
	<div class="col-sm-9 col-xs-12">
		<p>Signup For Special Offers</p>
		 <?php echo do_shortcode('[jeba_mailchimp formaction="//TheMovieFund.us11.list-manage.com/subscribe/post?u=a86c7ef25e551d43577df94b8&amp;id=687ef61f28"]'); ?>
		<p>Win a Movie Role, Rewards and Perks.</p>
	</div></div></div>
</div>
<!--
<div class="client-holder text-center">
            	<div class="container">
                	<div class="title text-center">
                	 <h2>IN THE NEWS - coming soon</h2>
                    </div>
                    <div id="carousel-client" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						//?php testnews_car(); ?>
                        </div>
                        <div class="carousel-nav">
                            <a data-slide="prev" href="#carousel-client" class="carousel-nav-prev">Prev</a>
                            <a data-slide="next" href="#carousel-client" class="carousel-nav-next">Nexty</a>
                        </div>
                    </div>
                </div>
</div>
-->
<div class="test-holder" id="test">
<div class="container">
<div class="row">
<div class="col-md-6">
<a data-toggle="modal" data-target="#myModal">

<img src="<?php echo get_home_url();?>/wp-content/uploads/AlwayslovedMoviesv1.jpg" alt="video" class="img-responsive" style="margin:60px 0px 0px 0px;" />
</a>                                           
</div>
<div class="col-md-6">
	<div class="row">	
	<div class="col-sm-5">
		<h2>Testimonials</h2>    	
	</div>
	<div class="col-sm-7">
	<div class="button text-right">
	<ul class="list-inline">
	<li><a class="btn btn-7 testiSwapTrigger" rel="filmmakersCor" href="javascript:void();">FILM MAKERS</a></li>
	<li><a class="btn btn-5 testiSwapTrigger" rel="insvestorsCor" href="javascript:void();"> INVESTORS</a></li>
	</ul>
	</div>
	</div>
	</div>
<br/>                         
<div id="carousel-test" class="carousel slide filmmakersCor TesCor" data-ride="carousel">
	<div class="carousel-inner">                                   
		<?php category2(); ?>
	</div>
	<div class="carousel-nav">
	<a data-slide="prev" href="#carousel-test" class="carousel-nav-prev">Prev</a>
	<a data-slide="next" href="#carousel-test" class="carousel-nav-next">Nexty</a>
	</div>
</div>
<div id="carousel-test-1" class="carousel slide insvestorsCor TesCor" data-ride="carousel">
	<div class="carousel-inner">
		<?php category1(); ?>
	</div>
	<div class="carousel-nav">
	<a data-slide="prev" href="#carousel-test-1" class="carousel-nav-prev">Prev</a>
	<a data-slide="next" href="#carousel-test-1" class="carousel-nav-next">Nexty</a>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="lart-view">
            <div class="team-holder text-center">
			
			<!--
            	<div class="container"><br/>
                	<h2>TEAM & PARTNERS</h2><br/>
                    <div id="carousel-team" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner custm-inner">
                     <?php Team();?>
		        </div>
                        <div class="carousel-nav">
                            <a data-slide="prev" href="#carousel-team" class="carousel-nav-prev">Prev</a>
                            <a data-slide="next" href="#carousel-team" class="carousel-nav-next">Next</a>
                        </div> </div></div> 
						-->
						
						</div></div>
                        <!-- <div class="clearfix visible-xs-block"></div> -->
        <!--Mobile -->
<div class="mobt-view">
            <div class="team-holder text-center">
			<!--
            	<div class="container">
                	<br/>
                	<h2>TEAM & PARTNERS</h2>
                    <br/>
                    <div id="carousel-teammt" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner custm-inner">
                     <//?php Team_mob();?>
		        </div>
                        <div class="carousel-nav">
                            <a data-slide="prev" href="#carousel-teammt" class="carousel-nav-prev">Prev</a>
                            <a data-slide="next" href="#carousel-teammt" class="carousel-nav-next">Next</a>
                        </div> </div> </div>
						-->
						</div></div>
        <!--Mobile -->	
         <div class="how-it-works text-center" id="how">
            	<div class="container">
                	<h2 class="white">How It Works</h2>
                    <div class="button">
                    	<ul class="list-inline">
                        	<li><a class="btn btn-7">FILM MAKERS</a></li>
                            <li><a class="btn btn-5 active-ihwit"> INVESTORS</a></li>
                        </ul>
                    </div><br/>
                    <div class="row">
<div class="mob-center lar-view">
			<div class="col-md-12">
                           <div id="invest" class="how_steps set-posi1 hw-show">
                           <div class="slider4">
                           <?php how_it_inves();?> </div></div> 
                           <div id="film-ker" class="how_steps set-posi2 hw-hide">
                           <div class="slider4">
                           <?php how_it();?>
                           </div></div> </div></div>
<div class="mob-center mob-view">
			<div class="col-md-12">
                           <div class="how_steps set-posi1">
                           <div class="slider2">
                           <?php how_it_inves();?></div></div> 
                           <div class="how_steps set-posi2 hw-hide">
                           <div class="slider2">
                           <?php how_it();?>
                           </div></div> </div></div></div></div></div>

            <!--<div class="top-share">

            	<div class="container">

                	<div class="row">

                    	<div class="col-sm-3">

                        	<div class="share-count">

                                <a class="btn btn-41" href="<?php echo of_get_option('join'); ?>">Join</a>

                            </div>

                        </div>

                        <div class="col-sm-6 col-sm-offset-3">

                        	<div class="clogin-with-social">

                                <ul class="list-inline">

                                	<li><a href="<?//php echo of_get_option('linkedin'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-in.png" alt="Img"></a></li>

                                    <li><a href="<?//php echo of_get_option('facebook'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-fb.png" alt="Img"></a></li>

                                    <li><a href="<?//php echo of_get_option('twitter'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-tw.png" alt="Img"></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->

            

            <div class="feat-holder" id="plan">
<!--
            	<div class="title text-center">

                    <h2>Featured Project: Planet X</h2>

                    <br/>

                </div>

            	<div class="container">

                    <div class="row">

					//?php featureditem();?>

                    </div>

                </div>
-->
            </div>

            <div class="project-holder text-center lar-view" id="Projects">

            	<div class="container">

                	<h2>Latest Projects</h2>

                    <br/> 

                   <div class="row">

                    <div id="latest_project_movie"  data-ride="carousel">

                        <div class="latest-inner latest-pros">				

                    <?php Latest_projrcts_modified(); ?>    
                    <div id="loadMore" style="cursor:pointer;padding:6px 12px;background-color:#F36935;color:#fff;border-radius:5px;"><span>More Movies >></span></div>

                         </div>	

                         <!-- <div class="carousel-nav">

                            <a data-slide="prev" href="#carousel-latest" class="carousel-nav-prev">Prev</a>

                            <a data-slide="next" href="#carousel-latest" class="carousel-nav-next">Next</a>

                        </div> -->

                    </div>	
                    <!-- <a style="color: #F36935" class="btn-lm" href="">More movies >></a> -->
                    <!-- <a style="color: #F36935" class="btn-lm" href="<?php echo get_home_url(); ?>/movies">More movies >></a> -->

                    </div>				

                    <br/>

                </div>

            </div>

            <!--Mobile view-->

            <div class="project-holder text-center mob-view" id="Projects">

            	<div class="container">

                	<h2>Latest Projects</h2>

                    <br/> 

                   <div class="row">

                    <div id="carousel-latest" data-ride="carousel">

                        <div class="latest-inner latest-pros">		

							<?php Latest_projrcts_mob(); ?>
							<a style="color: #F36935" class="btn-lm" href="<?php echo get_home_url(); ?>/movies">More movies >></a>
                         </div>	

                    </div>	

                    </div>				

                    <br/>

                </div>

            </div>

            <!--// Mobile view-->

    <!--

            <div class="fund-holder" id="fund-holder">

            	<div class="container">

                	<br/>

                	<div class="row">

                    	<div class="col-md-6 col-md-push-6">
                          <div class="invest_video" style="padding-top:100px; padding-left:45px;">
<a data-target="#myModal" data-toggle="modal">
<img class="img-responsive" alt="video" src="<?php echo get_home_url();?>/wp-content/uploads/FILM_FINANCE_THEMOVIEFUND-FINAL.jpg">
</a>     </div>   
                    		

                        </div>
                    <div class="col-md-6 col-md-pull-6">
					
					<h3>INVEST IN THE MOVIE FUND </h3>

                        	<p>The Movie Fund is a fund managed by leading and successful Producers with a proven track record of making profitable Movies and investments allowing investors to spread This Binding Letter of Agreement for “PLANET X FILMS”, LLC, herein (““PLANET X FILMS””) regarding a production of the motion picture project to be determined, herein referred to as “PLANET X”</p>

                            <br/>
                        
                        <div class="list_top" style="color: #fff; margin-left: 50px">
								<table>
									<tr>
										<td>Min.Investment</td>
										<td>$5,000</td>
									</tr>
									<tr>
										<td>Raising</td>
										<td>$35M</td>
									</tr>
									<tr>
										<td>For 15% Equity</td>
										<td>$20%</td>
									</tr>
									<tr>
										<td>Average Carry</td>
										<td>20%</td>
									</tr>
									<tr>
										<td>Interest per anumm</td>
										<td>25%</td>
									</tr>
									<tr>
										<td>RIO</td>
										<td>20%</td>
									</tr>
								</table>
							</div>
                        
                        
                        

                            <div class="list">

                                <ul class="list-inline">

                                    <li class="text-center"><a href="#">$1.75M<br><span> Invested </span></a></li>

                                    <li class="text-center"><a href="#">$50M<br><span>Fund Target</span></a></li>

                                </ul>

                            </div>

                          

                            <div class="button">

                                <ul class="list-inline">

                                    <li><a href="#" class="btn btn-6" style="background-color: green">INVEST</a></li>
                                  <li><a class="btn btn-61" style="background-color:#EDC628; border-color: blue" href="#">Details</a></li>
<!--
                                    <li><a href="#" class="btn btn-5" style="background-color: blue">PPM Contracts</a></li>

                                    <li><a href="#" class="btn btn-61" style="background-color:orange ">Management</a></li>  -->

                                </ul>

                            </div>
					
					
					
                                                        
</div>
                    

                    </div>

                </div>

            </div>

            

            <!--<div class="movie-news">

            	<div class="container">

                	<div class="news-box">

                    	<div class="row">

                        	<div class="col-sm-3">

                            	<div class="blue-box text-center">

                                    <h4>BreakingNews</h4>

                                </div>

                            </div>

                            <div class="col-sm-9">

							<//?php Breakingnews(); ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->

            <div class="social-holder">

            	<div class="container">

                	<div class="row">

                    	<div class="col-sm-4">

                        	<div class="social-messages-container">

                            	<h2> <i class="fa fa-instagram"></i> Instagram</h2>

                                <br/>

								<div class="in-sta">

 <div class="inst-fram">

<iframe src="http://widget.websta.me/in/tag:themoviefund/?s=85&w=5&h=2&b=0&bg=212121&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width: 320px; height: 200px" ></iframe>

  </div>                              

                                </div>

							</div>

                        </div>

                    	<div class="col-sm-4">

                        	<div class="social-messages-container">

                            	<h2> <i class="fa fa-twitter"></i> Twitter</h2>

                                <br/>

								<div class="twtt-f">
<a class="twitter-timeline"
  data-widget-id="650984236829118464"
  href="https://twitter.com/TwitterDev"  
  width="340"
  height="200"
  data-tweet-limit="1"
  data-chrome=" ">
Tweets by @TwitterDev
</a>
                                <?//php dynamic_sidebar('sidebar-15'); ?>

								</div>

                            </div>

                        </div>

                        <div class="col-sm-4">

                        	<div class="social-messages-container">

                            	<h2> <i class="fa fa-facebook"></i> Facebook Feeds</h2>

                                <br/>

                               <?php echo do_shortcode('[custom-facebook-feed num=2 height=200px width=100%]'); ?>

							   

							   </div>

							   

                        </div>

                    </div>

                </div>

            </div>

               <!--

            <div class="movie-news">

            	<div class="container">

                    <div class="title text-center">

                        <h2>LATEST NEWS & TRAILERS</h2>

                    </div>

                    <br/>

                    <div class="sample-news">     





<div class="trail-cali">

<ul class="lat-clp">

<li class="alls la-active">All</li>

<li class="trails">Trailers</li>

<li class="clps">Clips</li>

</ul>

<div class="innertc">

<?php trailers_clips(); ?>



<?php trailers_clips1(); ?>



<?php trailers_clips2(); ?>

</div>

</div>



           

<?//php echo do_shortcode('[nimble-portfolio post_type="portfolio" taxonomy="nimble-portfolio-type" skin="default" orderby="menu_order" order="DESC" ]');?>

                    </div>

                    

                 </div>   

            </div>

            

         <div class="blog-holder">

            	<div class="container">

                	<div class="title text-center">

                    	<h2>MOVIE FUND BLOGS</h2>

                        <p>allowing investors to sprad their investments across a slate of Movies to better than chances of success.</p>

                        <br/>

                        <div class="row">

                        	<div class="col-sm-6">	

                            	<div class="read text-right">

                                	<a href="<?php echo home_url(); ?>/2015/09/18/shoot-like-tarantino-ten-tips-gleaned-from-the-master-of-tension/"> <img src="<?//php echo get_home_url();?>/wp-content/uploads/2015/09/blog-news-1.png" alt="post" /> Investor News</a>

                                </div>

                                <br/>

                                <div class="blog text-left">

                                <?//php Movie_found_blog_investors();?>

                                </div>

                            </div>

                            <div class="col-sm-6">	

                            	<div class="read text-left">

                                	<a href="<?php echo get_home_url();?>/2015/09/18/angel-investors-themoviefund-com-what-you-need-to-know/"> Latest Movie News <img src="<?//php echo get_home_url();?>/wp-content/uploads/2015/09/blog-news-2.png" alt="post" class="img-responsive" /> </a>

                                </div>

                                <br/>

                                <div class="blog text-left">

                                <?//php Movie_found_blog_movie_news();?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>-->


            <div class="coming-holder">

            	<div class="container">

                    <div class="title text-left">

                        <h2>COMING SOON TRAILERS</h2>

                    </div>


                    <br/>   

                    <div class="row">      

                    <div class="col-md-12">   

                           <div class="new_coming_soon">

                      <?php echo do_shortcode('[feedzy-rss feeds="http://www.fandango.com/movies/holiday/rss/movie-list.rss" max="6" title="25" feed_title="no" target="_blank" meta="no" summary="no" summarylength="250" thumb="yes" size="200"]');?>

</div>



                        </div>

                    </div>

                </div>
</div> 







            <div class="faq-holder">

            	<div class="container">

                    <div class="title text-center">

                        <h2>FAQ's</h2>

                    </div>


                    <br/>   

                    <div class="row">      

                    <div class="col-md-6">                                

					    <?php FAQsodd();?>	

                    </div>

                    <div class="col-md-6">                                

					    <?php FAQseven();?>	

                    </div>

                        <div class="view text-right">

                        	<a href="<?php echo get_home_url(); ?>/faqs">View More >></a>

                        </div>

                    </div>					

                    

            	</div>

            </div>
<div class="accordion-holder">
<ul>

<?php
$page_id = 1015 ;
if( get_page($page_id) ) { ?>
<?php
  $page_id = 1015; // example id of your page 
  $page = get_page( $page_id );
  if ($page->post_status == 'publish') {?>


<li>
<div class="acc_head">
Movie Investor Information <i class="fa fa-chevron-circle-down"></i>
</div>
<div class="acc_body">
<?php echo get_post( 1015 )->post_content; ?>
</div>
</li>


  <?php
}
?>
<?php }else{} ?>


<?php
$page_id = 1017 ;
if( get_page($page_id) ) { ?>
<?php
  $page_id = 1017; // example id of your page 
  $page = get_page( $page_id );
  if ($page->post_status == 'publish') {?>


<li style="border-top:2px solid #000000;border-bottom:2px solid #000000;">
<div class="acc_head">
Investment Information <i class="fa fa-chevron-circle-down"></i>
</div>
<div class="acc_body">
<?php echo get_post( 1017 )->post_content; ?>
</div>
</li>


  <?php
}
?>
<?php }else{} ?>


<?php
$page_id = 1019 ;
if( get_page($page_id) ) { ?>
<?php
  $page_id = 1019; // example id of your page 
  $page = get_page( $page_id );
  if ($page->post_status == 'publish') {?>


<li>
<div class="acc_head">
Film Finance Information <i class="fa fa-chevron-circle-down"></i>
</div>
<div class="acc_body">
<?php echo get_post( 1019 )->post_content; ?>
</div>
</li>


  <?php
}
?>
<?php }else{} ?>






</ul>
</div>
            <div class="follow-holder text-center">

            	<div class="container">

                	<div class="follow-list">

                    	<div class="row">

                        	<div class="col-sm-4 text-right">

                            	<h2>Follow Us On:</h2>

                            </div>

                            <div class="col-sm-8 text-center">
                                <ul class="list-inline" style="margin-top:20px;">
                                    <li><a href="<?php echo of_get_option('instagram-j'); ?>" class="csmb-border csmb-round csmb instagram"></a></li>
                                    <li><a href="https://www.pinterest.com/themoviefund/" class="csmb-border csmb-round csmb pinterest"></a></li>
                                    <li><a href="<?php echo of_get_option('join2'); ?>" class="csmb-border csmb-round csmb facebook"></a></li>
                                    <li><a href="http://the-movie-fund.tumblr.com/" class="csmb-border csmb-round csmb tumblr"></a></li>
                                    <li><a href="https://twitter.com/themoviefund" class="csmb-border csmb-round csmb twitter"></a></li>
                                    <li><a href="https://plus.google.com/106013370072001308989" class="csmb-border csmb-round csmb gplus"></a></li>
                                </ul>                            
                                <!--
                                <ul class="list-inline">
                                    <li class="text-center social-linkedin"><a href="https://www.linkedin.com/themoviefund"><figure></figure>Tumblr</a></li>
                                    <li class="text-center social-youtube"><a href="https://www.youtube.com/channel/UCJSsT-dHgwVl1rdtojN_OjQ"><figure></figure>Youtube</a></li>
                                    <li class="text-center social-facebook"><a href="https://www.facebook.com/pages/The-Movie-Fund/371261519745782"><figure></figure>Facebook</a></li>
                                    <li class="text-center social-pinterest"><a href="https://www.pinterest.com/themoviefund/"><figure></figure>Pinterest</a></li>
                                    <li class="text-center social-twitter"><a href="https://twitter.com/themoviefund"><figure></figure>Twitter</a></li>
                                    <li class="text-center social-instagram"><a href="https://www.instagram/moviefund"><figure></figure>Instagram</a></li>
                                    <li class="text-center social-plus"><a href="https://plus.google.com/b/106013370072001308989/"><figure></figure>Google +</a></li>
                                </ul>                            
                            	<ul class="list-inline">
                                    <li class="text-center"><a href="http://the-movie-fund.tumblr.com"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/11/thum.png"><br>Tumblr</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('linkedin'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/12/Linkedin_round.png"><br>Linkedin</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('youtube'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-2.png"><br>Youtube</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('facebook'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-3.png"><br>Facebook</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('pinterest'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-4.png"><br>Pinterest</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('twitter'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-5.png"><br>Twitter</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('instagram'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-6.png"><br>Instagram</a></li>
                                    <li class="text-center"><a href="<?php echo of_get_option('google_plus'); ?>"><img alt="post" src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/follow-7.png"><br>Google +</a></li>
                                </ul>
                                -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>


<!--script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script-->

		<script src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>
<script>
var $p = jQuery;
$p(document).ready(function() {
$p('.accordion-holder li').click(function(e) {
e.preventDefault();
var $arr_elm = $p(this).children('.acc_head').children('i');
var $this_elm = $p(this).children('.acc_body');
if($this_elm.is(':visible')) {
$arr_elm.removeClass('fa-chevron-circle-up');
$arr_elm.addClass('fa-chevron-circle-down');
$this_elm.fadeOut('slow');
} else {
$p('.accordion-holder > ul > li').each(function(){
var $thir_arr = $p(this).children('.acc_head').children('i');
$thir_arr.removeClass('fa-chevron-circle-up');
$thir_arr.addClass('fa-chevron-circle-down');
$p(this).children('.acc_body').hide();
});
$arr_elm.removeClass('fa-chevron-circle-down');
$arr_elm.addClass('fa-chevron-circle-up');
$this_elm.fadeIn('slow');
}
});
});
</script>
<?php get_footer(); ?>


