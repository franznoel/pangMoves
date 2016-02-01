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
        <header>
            <?php get_template_part("part","mainheader"); ?>
            <?php get_template_part("part","mainmenu"); ?>
        </header>
<div class="content">


<?php get_template_part("part","howitworks"); ?>
<?php get_template_part("part","filmpanel"); ?>

            
                <div class="container">
<h2 style="text-align: center; margin-bottom:30px">How It Works ?</h2>
<div class="col-md-12">
<div class="wel-hwt">
<?php echo of_get_option('how_it'); ?>
</div>
</div>
</div>

    <?php get_template_part("howitworks"); ?>


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