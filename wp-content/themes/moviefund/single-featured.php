<?php get_header("featured"); ?>
    <!-- .black-panel -->
    <div class="container black-panel">
      <div id="slick-carousel">
        <?php 
        global $post;
        $i=1;
        $incr = have_posts();
        $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'featured','order' => 'ASC');
        $featured = get_posts( $args );
        // first instance
        foreach( $featured as $post ) { setup_postdata($post);
        ?>
        <div>
            <a href="<?php echo get_permalink();?>">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title();?>" />
                    <h2 class="featured-thumb-title"><?php the_title();?></h2>
                </div>
            </a>
        </div>
        <?php $i++; } wp_reset_query(); ?>
        <!-- Second instance -->
        <?php foreach( $featured as $post ) { setup_postdata($post); ?>
        <div>
            <a href="<?php echo get_permalink();?>">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title();?>" />
                    <h2 class="featured-thumb-title"><?php the_title();?></h2>
                </div>
            </a>
        </div>
        <?php $i++; } wp_reset_query(); ?>        
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#slick-carousel').slick({
            infinite: true,
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay:false,
            dots: false,
            responsive: 
            [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 8,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: false
                }
            },
            {
                breakpoint: 1000,
                settings: {
                  slidesToShow: 6,
                  slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 5,
                  slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 2
                }
            },
            {
                breakpoint: 500,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 2
                }
            },
            {
                breakpoint: 360,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
            }]
        });
    });
    </script>
    <!-- .slick-carousel -->


    <div class="feat-holder planetx" id="plan" style="background-size:cover;background-position:<?php the_field("position_top")?>px <?php the_field("position_bottom"); ?>px;background-image:url(<?php the_field("custom_image"); ?>)">
        <div class="title text-center">
            <h2><?php echo get_the_title(); ?></h2>
            <br/>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div id="featured-investments" class="overlay">
                <h5><span><?php the_title();?></span></h5>
                <p style="text-shadow:2px 2px 5px #000000;"><?php echo get_the_excerpt(); ?><p>
                <h6><span>Compares:</span> <?php the_field( "compares" );?></h6>
                <!--
                <div class="list text-center">
                <ul class="list-inline">
                    <li class="text-center"><a href="#" class="latest-loading"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/li-load.png" alt="post" /></a></li>
                    <li class="text-center"><a href="#"><?php the_field( "budget" );?><br/><span>Budget</span></a></li>
                    <li class="text-center"><a href="#"><?php the_field( "invested" );?><br/><span>Invested</span></a></li>
                    <li class="text-center mar-lat"><a href="#"><?php the_field( "pledged" );?><br/><span>Pledged</span></a></li>
                    <li class="text-center"><a href="#"><?php the_field( "investers" );?><br/><span>Investers</span></a></li>
                </ul>
                </div>
                -->
                <!--
                <div class="share-box text-center">
                  <ul class="list-inline">
                      <li><p><?php the_field( "jeba1" );?></p></li>
                      <li><a href="<?php the_field( "jeba2" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-2.png" alt="share" /></a></li>
                      <li><a href="<?php the_field( "jeba3" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-3.png" alt="share" /></a></li>
                      <li><a href="<?php the_field( "jeba4" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-4.png" alt="share" /></a></li>
                  </ul>
                </div>
                -->
              </div>
              <div class="jeba_feature">
                <div class="button list">
                    <ul class="list-inline">
                        <li class=""><a href="#"><?php the_field( "budget" );?><br/><span>Budget</span></a></li>
                        <li class=""><a href="#"><?php the_field( "invested" );?><br/><span>Target</span></a></li>
                        <li class="right_b"><a class="btn btn-6" href="<?php the_field( "invest_link" );?>">Invest</a></li>
                        <!--
                        <li class="right_b"><a class="btn btn-5" href="<?php the_field( "contract_link" );?>">Contract</a></li>
                        <li class="right_b"><a class="btn btn-61" href="<?php the_field( "package" );?>">Package</a></li>
                        -->
                    </ul>
                </div>
              </div>
              <br/>
            <?php // endforeach; ?>
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div>
    </div>

    <!--
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
                        </ul>
                    </div>
                </div>
            <div class="col-md-6">
              <div class="invest_video" style="padding-top:40px; padding-left:20px;">
                <a data-target="#featured-modal" data-toggle="modal">
                  <img class="img-responsive" alt="video" src="<?php echo get_home_url();?>/wp-content/uploads/2015/12/blue-image.png">
                </a>
              </div>
            </div>
            </div>
        </div>
    </div>
    -->

    <!-- Modal -->
    <div class="modal fade" id="featured-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <iframe id="youtube-video" src="https://player.vimeo.com/video/136802487?title=0&byline=0&portrait=0" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      // $('#featured-modal').on('hidden.bs.modal', function () {
        // $('#myInput').focus();
      //   $('#youtube-video').stopVideo();
      // });
    </script>
<?php get_footer(); ?>


