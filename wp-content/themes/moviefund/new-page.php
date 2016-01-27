<?php
/*
 * Template Name: new-page
 */
?>
<head>
<meta name="google-site-verification" content="46LXPYArlyQvFNFiD8HXQVvGC0J7cKaG1xHtfwHSsTA" />
<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script>-->

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
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js" language="javascript"></script>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.classyscroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custommin.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap-3.3.6/js/bootstrap.min.js"></script>
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
.follow-list-2{float: right;}
.follow-list-2 ul.sign_in_social li{float: left;}
.follow-list-2 ul.sign_in_social li h3{
    color: #fff;
    margin-top: 0px;
    line-height: 40px;
    float:  ;
    margin-right: 0px;
}
.follow-list-2 ul.sign_in_social li h3 img{margin-top: 7px;min-width: 75px;}
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
        float: none !important;
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
    
    
    #newsletter-form .mc-field-group{width: 100%;}
    #newsletter-form .mc-field-group input#email{max-width: 100%; margin-bottom: 5px;}
}

 
</style>
	</head>
        
 <div class="feat-holder img" id="plan">
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
        
<?php //get_footer(); ?>
<?php wp_footer();?>		
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js" language="javascript"></script>		
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jsx/bx.js" language="javascript"></script>		
        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js" language="javascript"></script>				<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.mousewheel.js"></script>        <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/scjs/jquery.classyscroll.js"></script><script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custommin.js"></script><script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap-3.3.6/js/bootstrap.min.js"></script><!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script--><!--link  href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"--><!--script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script--><!--script  src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script-->
        <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.1.min.js" language="javascript"></script> -->
		

<!--Bottom Scroller-->
<script type="text/javascript">
$(document).ready(function () {
	x=8;
	//size_li=100;
	   // size_li = $("#testing div.col-md-3").size();
	   // size_li_onemore=size_li+1;
	    //alert(size_li);
	$('#testing div.demo:lt('+x+')').show();
	 $('#loadMore').click(function () {
	 	 // $("li").eq(2).addClass("selected");
	 	        //x= (x+3 <= size_li) ? x+3 : size_li;
           // $('#aja div.post-com:lt('+size_li+')').fadeIn();
            $('#testing div.demo:lt(16)').fadeIn();
            x=16;
            if(x==16){

$( "#loadMore span" ).replaceWith( "<a href='<?php echo get_home_url(); ?>/movies' style='text-decoration:none;'>Browse Movies</span>" );
//$( "#loadMore i" ).css("display","none");
            }
          
    });
});
</script>

<script>
$(document).ready(function() {
	
	$('.team-post-conts, .partners-cont').each(function(){
		var scHeight = $(this).find('center').height();
		$(this).scrollTop( scHeight );
	});

$(".click-f").click(function(){
$("#film-ker").css('display','block');
$("#invest").css('display','none');
});

$(".click-").click(function(){
$("#film-ker").css('display','none');
$("#invest").css('display','block');
});
	
});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/bootstrap-3.3.6/js/bootstrap.min.js"></script>