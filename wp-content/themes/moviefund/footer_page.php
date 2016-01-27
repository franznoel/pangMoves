            <div class="social-holder">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-4">
                        	<div class="instagram">
                            	<h2> <i class="fa fa-instagram"></i> Instagram</h2>
                                <br/>
								<div class="in-sta">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/thumbnails/insta.png" alt="post" class="img-responsive" /></a>
                                </div>
							</div>
                        </div>
                    	<div class="col-sm-4">
                        	<div class="instagram">
                            	<h2> <i class="fa fa-twitter"></i> Twitter</h2>
                                <br/>
								<div class="twtt-f">
                                <?php dynamic_sidebar('sidebar-15'); ?>
								</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="instagram">
                            	<h2> <i class="fa fa-facebook"></i> Facebook Feeds</h2>
                                <br/>
                               <?php echo do_shortcode('[custom-facebook-feed]'); ?>
							   
							   </div>
							   
                        </div>
                    </div>
                </div>
            </div>


</div>
        <footer>
        	<div class="get-start-holder">
            	<div class="container">
				<div class="row">
                  <div class="col-md-3 right-border">
				  <div class="inn-widg">
				  <?php dynamic_sidebar('sidebar-11'); ?>
				  </div>
				  <div class="inn-widg">
				  <?php dynamic_sidebar('sidebar-13'); ?>
				  </div>
				  </div>
                  <div class="col-md-3 col-md-offset-1 right-border">
				  <div class="inn-widg">
				  <?php dynamic_sidebar('sidebar-12'); ?>
				  </div>
				  <div class="inn-widg">
				  <?php dynamic_sidebar('sidebar-14'); ?>
				  </div>
				  </div>
                  <div class="col-md-4 col-md-offset-1">
				  <div class="inn-widg">
				  <h4>Contact Us</h4>
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="col-sm-11">
                                    <p><?php echo of_get_option('address'); ?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="col-sm-11">
                                    <p><?php echo of_get_option('phonenumber'); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-11">
                                    <p><?php echo of_get_option('emailid'); ?></p>
                                </div>
                            </div>
				  <?php echo do_shortcode('[contact-form-7 id="528" title="Footer form_copy"]'); ?>
				  </div>
				  </div>
				  </div>
                </div>
            </div>


        </footer>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <iframe src="https://player.vimeo.com/video/136802487?title=0&byline=0&portrait=0" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        
    	<?php wp_footer();?>
       


		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.classyscroll.js"></script>
        <script>
            $(document).ready(function() {
                $('.scrollbars').ClassyScroll();

    $(".pro-content .remore").click(function(){
        $(".pro-content .excrt-cont").slideToggle();
        $(".pro-table").addClass("hide");
    });
            });
        </script>
		
<!--fb-->

</body>
</html>