<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta name="google-site-verification" content="46LXPYArlyQvFNFiD8HXQVvGC0J7cKaG1xHtfwHSsTA" />
        <!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script>-->
        <?php 
            //function textdomain_jquery_enqueue() {
            //wp_deregister_script( 'jquery' );
            //wp_register_script( 'jquery',get_template_directory_uri()."/js/jquery-1.11.1.min.js",false,null,false);
            //wp_enqueue_script('jquery',get_template_directory_uri()."/js/jquery-1.11.1.min.js",false,'1.11.1',false);
            //}
            //if ( !is_admin() ) {
            //  add_action( 'wp_enqueue_scripts', 'textdomain_jquery_enqueue', 11 );
            //}
        ?>
        <meta name='robots' content='noindex,follow' />
        <meta charset="<?php bloginfo('charset'); ?>">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <title><?php bloginfo('name'); ?></title>
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri();?>/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/font.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri();?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/jsx/style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri();?>/bootstrap-3.3.6/css/bootstrap.min.css">
        <!--Fancy scroller-->
        <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri();?>/sccss/jquery.classyscroll.css" />
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/png">
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/png">
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap-3.3.6/js/bootstrap.min.js"></script>
        <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" language="javascript"></script> -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.classyscroll.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custommin.js"></script>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
        <!--link  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"-->
        <!--script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script-->
        <!--script  src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script-->
        <?php wp_head(); ?>
        <style type="text/css">
            .share-with-count.twitter_tweet{margin-top: 15px;}
            .follow-list-2 ul.sign_in_social {
               margin-bottom: 0px;
            }
            .follow-list-2 ul.sign_in_social li h3{
                color: #fff;
                margin-top: 0px;
                line-height: 40px;
                float:  ;
                margin-right: 0px;
            }
            .follow-list-2 ul.sign_in_social li h3 img{margin-top: -10px;min-width: 75px;}
            .follow-list-2 ul.sign_in_social li a {
                color: #fff;
                text-decoration: none;
                float: left;
                overflow: hidden;
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                -ms-border-radius: 50%;
                -o-border-radius: 50%;
                margin: 0px 0px; 
            }
            .follow-list-2 ul.sign_in_social li a:hover{
                opacity: 0.8;
                transition: all 0.3s;
                -moz-transition: all 0.3s;
                -ms-transition: all 0.3s;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
            }
            .follow-list-2 ul.sign_in_social li a img {
                margin-top: 0px;
                padding: 0px;
                border-radius: 0%;
            }

            @media (max-width: 767px)
            {
                .follow-list-2 .list-inline>li {
                    padding: 0px 2px !important;
                }
                .content .project-holder .pro-content {
              background: inherit;
            } 
            .follow-list-2 ul.sign_in_social li a img {
              width: 26px !important;
            }
            .follow-list-2 ul li h3{line-height: inherit !important;}
            .follow-list-2 ul.sign_in_social li h3 img{margin-top: -18px !important;min-width: 75px;}
            .follow-list-2 ul.sign_in_social li a img{width: 23px;}
             .content .test-holder{  max-height: inherit !important; }
            
            .content .project-holder .pro-box .img-thumb img,.content .welcome-holder img{margin-left: auto;margin-right: auto;}
            
            #fund-holder{text-align: center;}
            #fund-holder .list_top table{margin-left: auto;margin-right: auto;}
            #fund-holder .list_top{margin-left: 0px !important;}
            
            .feat-holder .list ul.list-inline li{padding:0px !important}
           .content .social-holder{text-align: center;}
           .content .social-holder h2 { 
            float: left;
            width: 100%;
            margin: 10px 0px;
            }
            #newsletter-form .blue-holder .mc-field-group{width: 100%;}
            #newsletter-form .blue-holder .mc-field-group input#email{max-width: 100%; margin-bottom: 5px;}
            }
            #plan.feat-holder.planetx {
                background-image:url("../img/others/gold-of-the-god.jpg");
            }
        </style>
    </head>

    <body id="home">
        <?php if ( is_front_page() ){ ?>      
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo text-center">
                                <a href="<?php echo get_home_url(); ?>">
                                    <img src="<?php echo of_get_option('logo'); ?>" alt="Logo" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-2">
                            <div class="login-panel text-right">
                                <ul class="list-inline" style="width:100%;">
                                    <?php
                                    if (is_user_logged_in()) {
                                        global $current_user;
                                        get_currentuserinfo(); 
                                    ?>
                                    <li><a href="<?php echo get_site_url(); ?>/profile/"><?php echo get_avatar( $current_user->ID, 32 ); ?></a>&nbsp;</li>
                                    <li style="text-align:left;color:#ffffff;line-height:75%;"><span style="font-size:8px;">Welcome!</span><br/><span style="font-size:14px;"><?php echo $current_user->user_firstname.' '.$current_user->user_lastname; ?><span></li>
                                    <?php } ?>
                                    <li><a href="<?php echo site_url();?>/contact-us/" class="btn btn-1" style="border:1px solid #0CC71A;">INVEST NOW</a></li>
                                    <li><a href="<?php echo site_url();?>/contact-us/" class="btn btn-2" style="border: 1px solid #E8D600;">UPLOAD PROJECT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part("part","mainmenu"); ?>

            <div class="header-bottom">
                <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">                    
                        <?php 
                        global $post;
                        $i =1;
                        $tmp_post = $post;
                        $args = array( 'post_type' => 'slider', 'numberposts' => -1, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
                        $myposts = get_posts( $args );
                        $meta = get_post_meta(get_the_id());
                        foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                        <div class="item<?php echo ($key==0?' active':''); ?>">
                        <?php 
                            if (has_post_thumbnail( $post->ID ) ):
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );
                        ?>
                        <a href="#mySliderVideo-<?php echo $i;?>" data-toggle="modal" data-target="#mySliderVideo-<?php echo $i;?>"><?php the_post_thumbnail('slider'); ?></a>
                        <?php endif; ?>
                        </div>
                        <div class="modal fade" id="mySliderVideo-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="mySliderVideo-<?php echo $i;?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <?php if($post !== ''){echo get_the_content();} else{echo '<h1>'."There is no video to play".'</h1>';}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                    <div class="carousel-nav">
                    <ol class="carousel-indicators">
                         <?php foreach( $myposts as $key => $post ) { setup_postdata($post); ?>
                            <li data-target="#carousel-banner" data-slide-to="<?php echo $key;?>" <?php if($key == 0){?>class="active"<?php } ?>></li>
                        <?php }?>
                    </ol>
                    </div>
                </div>
            </div>
        </header>

    <div class="content">
        <?php get_template_part('part','filmpanel'); ?>
        <?php // get_template_part('part','share'); ?>

    <?php } else {?>
    <header>
        <?php get_template_part("part","mainheader"); ?>
        <?php get_template_part("part","mainmenu"); ?>
        <?php get_template_part("part","carousel"); ?>
    </header>
    <div class="content">
        <?php get_template_part('part','filmpanel'); ?>
        <?php // get_template_part('part','share'); ?>

        <?php if (!is_page("members")): ?>
            <div class="how-it-works text-center" id="how">
                <div class="container">
                    <h2 class="white">How It Works</h2>
                    <div class="button">
                        <ul class="list-inline">
                            <li><a class="btn btn-7">FILM MAKERS</a></li>
                            <li><a class="btn btn-5 active-ihwit"> INVESTORS</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="mob-center lar-view">
                            <div class="col-md-12">
                                <div class="how_steps set-posi1">
                                   <div class="slider4">
                                   <?php how_it_inves();?>
                                   </div>
                                   </div>
                                   <div class="how_steps set-posi2 hw-hide">
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
        <?php endif; ?>
    </div>
    <div class="content">
<?php } ?> 
  
 