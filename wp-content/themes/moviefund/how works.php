<?php 
/**
Template Name: How It Works
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
		<!-- CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/font.css">

        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/style.css">

		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/jsx/style.css">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



		<!--Fancy scroller-->

        <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri();?>/sccss/jquery.classyscroll.css" />

		

		<!-- FAVICONS -->

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/png">

		<link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/png">
		
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js" language="javascript"></script>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.classyscroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custommin.js"></script>
        
        <?php wp_head(); ?>
	</head>

    <body id="home">

<?php /*?><div class="inn-share">
<div class="container">
	<div class="row">
		<div class="col-sm-3">
		<div class="innr-top-social">
		<div class="inn-list" style="margin-top: 2px;">
		<div class="fb-like" data-href="https://www.facebook.com/pages/The-Movie-Fund/371261519745782 " data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
		<div><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>   </div>                            	
		</div>
		</div>
		</div>
	<div class="col-sm-7 col-sm-offset-2">
                        	<div class="innr-top-social" style="text-align: right;">
                                <ul class="inn-list" style="margin-top: 2px">
                                	<li><a target="_blank" href="<?php echo of_get_option('linkedin'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-in.png" alt="Img"></a></li>
                                    <li><a target="_blank" href="<?php echo of_get_option('facebook'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-fb.png" alt="Img"></a></li>
                                    <li><a target="_blank" href="<?php echo of_get_option('twitter'); ?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/sign-tw.png" alt="Img"></a></li>
                                </ul>
                            </div>
	</div>
	</div>
</div>
</div><?php */?>
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
                        <div class="col-sm-4 col-sm-offset-4">
                        	<div class="login-panel text-right">
                            	<ul class="list-inline">
                                	<li><a href="http://www.themoviefund.com/login" class="btn btn-1">Login / Register</a></li>
                                    <li><a href="#" class="btn btn-2">Create a Campaign</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu">
                <div class="container">
                    <nav class="navbar top-navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>                       
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_class' => 'nav navbar-nav' ) ); ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header-bottom">
                <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">					
				        <?php 
						global $post;
						$tmp_post = $post;
						$args = array( 'post_type' => 'innerslider', 'numberposts' => -1, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
						$myposts = get_posts( $args );
						$meta = get_post_meta(get_the_id());
						foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                            
                            <div class="item<?php echo ($key==0?' active':''); ?>">
                                
								<?php if (has_post_thumbnail( $post->ID ) ):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'innerslider' );?>
								<a href="<?php print_r($meta[link][0]);?>" data-toggle="modal" data-target="#mySliderVideo"><?php the_post_thumbnail('slider'); ?></a><?php endif; ?>
                                
                                <div class="carousel-content">
                                    <div class="container">
                                        <div class="carousel-content-panel">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-nav">
                    <ol class="carousel-indicators custm-indic">
						 <?php 
                        foreach( $myposts as $key => $post ) { setup_postdata($post); ?>
							<li data-target="#carousel-banner" data-slide-to="<?php echo $key;?>" <?php if($key == 0){?>class="active"<?php } ?>></li>
						<?php }?>
                    </ol>
                    </div>					
                </div>
            </div>
            <div class="modal fade" id="mySliderVideo" tabindex="-1" role="dialog" aria-labelledby="mySliderVideo">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <iframe src="https://player.vimeo.com/video/136802486?title=0&byline=0&portrait=0" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<div class="content">
<div class="film-panel">
	<div class="container">

	<div id="carousel-film" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner slider1"> 
	  <?php top_caro();?>
	</div>
	</div>

	</div>
</div>
<div class="top-share">

<div class="container">

	<div class="row">

		<div class="col-sm-3 col-xs-12 align-center">

		<div class="share-with-count">

		<div class="list-inline">

		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

		<div><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>   </div>                            	

		</div>

		</div>

		</div>

	<div class="col-sm-7 col-sm-offset-2 col-xs-12 col-xs-offset-0 align-center">

	<div class="follow-list-2 align-right">

		<ul class="list-inline">

		<li class="text-center"><a href="#"><h3>SIGN IN : </h3></a></li>

		<li class="text-center"><a href="<?php echo of_get_option('join'); ?>">Join<br><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-1.png" alt="post" class="img-responsive" /></a></li>

		<li class="text-center"><a href="<?php echo of_get_option('linkedin'); ?>">Linked In<br><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-2.png" alt="post" class="img-responsive" /></a></li>

		<li class="text-center"><a href="<?php echo of_get_option('facebook'); ?>">Facebook<br><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-3.png" alt="post" class="img-responsive" /></a></li>

		<li class="text-center"><a href="<?php echo of_get_option('twitter'); ?>">Twitter<br><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-4.png" alt="post" class="img-responsive" /></a></li>

		</ul>

	</div>

	</div>

	</div>

</div>

</div>
            
            	<div class="container">
<h2 style="text-align: center; margin-bottom:30px">How It Works ?</h2>
<div class="col-md-12">
<div class="wel-hwt">
<?php echo of_get_option('how_it'); ?>
</div>
</div>
</div>
<div class="how-it-works text-center" id="how">
                   <div class="container">
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
</div>
<!--Testiminial-->
<div class="container">
<div class="row">	
<div class="inn-testi">
<div class="col-sm-12">
        
<div id="carousel-test" class="carousel slide filmmakersCor TesCor" data-ride="carousel">

                                

		<?php test_inner(); ?>

	

</div>
</div>
</div>
</div>
</div>  
<!--// Testiminial-->          
<?php add_image_size( 'makers', 468, 200, true );?>
<div class="bread-bg makers-page">
<div class="container">
<div class="row">
<b><span><a href="<?php echo get_home_url(); ?>">HOME</a></span> >> <a href="<?php echo get_home_url(); ?>/how-it-works/">How It Works</a></b>
</div>
</div>
</div>

<div class="makers-page" style="background: #f4f4f4;padding: 30px 0;">
<div class="container">
<?php
global $post;	
$i = 0;
    $args = array('numberposts' => -1,'suppress_filters' => true,'pagepost_category' => 'how-it-works','post_type' => 'page_post','order' => 'ASC'
    );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) { setup_postdata($post);
?>
<div class="col-md-6">
<div class="makers-box">
 <div class="row">
	 <div class="col-sm-2 col-xs-2 int-no">
		<h5><?php $i++; echo $i;?></h5>
	 </div>
	 <div class="col-sm-10 col-xs-10"> 
		 <h4><?php the_title(); ?></h4>	
	 </div>
 </div>
  <div class="makers-post">
    <?php the_post_thumbnail('makers'); ?>	
	<div class="maker-content">
    <?php the_content(); ?>
	</div>
</div>
</div>
</div>

<?php
}wp_reset_query();

?>
</div>
</div>
</div>
<?php get_footer();?>