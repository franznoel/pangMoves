<?php 
/*
Template Name: Movie Fund Page
*/
get_header();?>      
         <div class="how-it-works text-center" id="how">
            <div class="container">
            <h2 class="white">How It Works</h2>
              <div class="button">
                <ul class="list-inline">
                    <li><a class="btn btn-7">FILM MAKERS</a></li>
                      <li><a class="btn btn-5 active-ihwit"> INVESTORS</a></li>
                  </ul>
              </div>
              <br/>
              <div class="row">
                <div class="mob-center lar-view">
                  <div class="col-md-12">
                    <div id="invest" class="how_steps set-posi1 hw-show">
                      <div class="slider4">
                        <?php how_it_inves();?>
                      </div>
                    </div> 
                    <div id="film-ker" class="how_steps set-posi2 hw-hide">
                      <div class="slider4">
                        <?php how_it();?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mob-center mob-view">
                  <div class="col-md-12">
                    <div class="how_steps set-posi1">
                      <div class="slider2">
                        <?php how_it_inves();?>
                      </div>
                    </div>
                    <div class="how_steps set-posi2 hw-hide">
                      <div class="slider2">
                        <?php how_it();?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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

            



            <div class="fund-holder" id="fund-holder">

              <div class="container">

                  <br/>

                  <div class="row">

                      <div class="col-sm-6">

                        <h3>Invest in THE MOVIE FUND </h3>

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
                                  <li><a class="btn btn-61" style="background-color:blue; border-color: blue" href="#">Details</a></li>
<!--
                                    <li><a href="#" class="btn btn-5" style="background-color: blue">PPM Contracts</a></li>

                                    <li><a href="#" class="btn btn-61" style="background-color:orange ">Management</a></li>  -->

                                </ul>

                            </div>

                        </div>
                    <div class="col-md-6">
                      <div class="invest_video" style="padding-top:40px; padding-left:20px;">
<a data-target="#myModal" data-toggle="modal">
<img class="img-responsive" alt="video" src="<?php echo get_home_url();?>/wp-content/uploads/2015/12/blue-image.png">
</a>     </div>                                      
</div>
                    

                    </div>

                </div>

            </div>



<?php get_footer(); ?>


