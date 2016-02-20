<?php 
/*
Template Name: Featured PlanetX
*/
get_header("none");?>      


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

            </div>-->

            

            <div class="feat-holder planetx" id="plan" style="background-position:0 -120px;background-image:url(http://moviefund.com/wp-content/themes/moviefund/img/others/gold-of-the-god.jpg)">

                <div class="title text-center">

                    <h2>Featured Project: Planet X</h2>

                    <br/>

                </div>

                <div class="container">

                    <div class="row">

                    <?php featureditem();?>

                    </div>

                </div>

            </div>


<?php get_footer(); ?>


