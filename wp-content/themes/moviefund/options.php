<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {

	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the posts into an array
	$options_posts = array();
	$options_posts_obj = get_posts(array('posts_per_page'=> -1));
	$options_posts[''] = 'Select a post';
	foreach ($options_posts_obj as $post) {
		$options_posts[$post->ID] = $post->post_title;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/inc/images/';
	
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'id' => 'logo',
		'type' => 'upload');
       $options[] = array(
               'name' => __('How It Works', 'options_framework_theme'),
               'id' => 'how_it',
               'type' => 'editor',
               'settings' => $wp_editor_settings ); 
		
	$options[] = array(
		'name' => __('Copyrights','options_framework_theme'),
		'id' => 'copyrights',
		'std' => 'Copyrights',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Address','options_framework_theme'),
		'id' => 'address',
		'std' => 'Address',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phonenumber','options_framework_theme'),
		'id' => 'phonenumber',
		'std' => 'phonenumber',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Emailid','options_framework_theme'),
		'id' => 'emailid',
		'std' => 'emailid',
		'type' => 'text');
	$options[] = array(
		'name' => __('Join','options_framework_theme'),
		'id' => 'joinid',
		'std' => '#Join',
		'type' => 'text');	
			$options[] = array(
		'name' => __('Linkedin','options_framework_theme'),
		'id' => 'join1',
		'std' => '#Linkedin',
		'type' => 'text');	
			$options[] = array(
		'name' => __('Facebook','options_framework_theme'),
		'id' => 'join2',
		'std' => '#Facebook',
		'type' => 'text');	
			$options[] = array(
		'name' => __('Twitter','options_framework_theme'),
		'id' => 'join3',
		'std' => '#Twitter',
		'type' => 'text');	
$options[] = array(
		'name' => __('Instagram','options_framework_theme'),
		'id' => 'instagram-j',
		'std' => '#instagram',
		'type' => 'text');	
$options[] = array(
		'name' => __('Google+','options_framework_theme'),
		'id' => 'gooogle',
		'std' => '#Google',
		'type' => 'text');	
	$options[] = array(
		'name' => __('Home Page Settings', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Murali Cup', 'options_framework_theme'),
		'id' => 'murali_cup',
		'type' => 'select',
		'options' => $options_posts);
	
	$options[] = array(
		'name' => __('Sharing Settings', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Twitter','options_framework_theme'),
		'id' => 'twitter',
		'std' => '#Twitter',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Facebook','options_framework_theme'),
		'id' => 'facebook',
		'std' => '#Facebook',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Linkedin','options_framework_theme'),
		'id' => 'linkedin',
		'std' => '#Linkedin',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Google Plus','options_framework_theme'),
		'id' => 'google_plus',
		'std' => '#GooglePlus',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Youtube','options_framework_theme'),
		'id' => 'youtube',
		'std' => '#Youtube',
		'type' => 'text');
	$options[] = array(
		'name' => __('Pinterest','options_framework_theme'),
		'id' => 'pinterest',
		'std' => '#Pinterest',
		'type' => 'text');
	$options[] = array(
		'name' => __('Instagram','options_framework_theme'),
		'id' => 'instagram',
		'std' => '#Instagram',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Join','options_framework_theme'),
		'id' => 'join',
		'std' => '#Join',
		'type' => 'text');		
	$options[] = array(
		'name' => __('Tweet Feeds','options_framework_theme'),
		'id' => 'tweetfeeds',
		'std' => '#Tweetfeeds',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Footer Information Links', 'options_framework_theme'),
		'type' => 'heading');
		
		/*The MovieFund Links*/
	$options[] = array(
		'name' => __('The MovieFund Links','options_framework_theme'),
		);	
		
	$options[] = array(
		'name' => __('Team','options_framework_theme'),
		'id' => 'team',
		'std' => '#Team',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('About','options_framework_theme'),
		'id' => 'about',
		'std' => '#About',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Movies','options_framework_theme'),
		'id' => 'movies',
		'std' => '#Movies',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Press','options_framework_theme'),
		'id' => 'press',
		'std' => '#Press',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('How it Works','options_framework_theme'),
		'id' => 'how it works',
		'std' => '#How it Works',
		'type' => 'text');	
	/*Investors Links*/	
	$options[] = array(
		'name' => __('Investors Links','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('For Investors','options_framework_theme'),
		'id' => 'for investors',
		'std' => '#For Investors',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('FAQs','options_framework_theme'),
		'id' => 'faqs ',
		'std' => '#FAQs',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Testimonies','options_framework_theme'),
		'id' => 'testimonies',
		'std' => '#Testimonies',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Signup','options_framework_theme'),
		'id' => 'signup',
		'std' => '#Signup',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Support','options_framework_theme'),
		'id' => 'support',
		'std' => '#Support',
		'type' => 'text');	
		
		/*Filmmakers Links*/
		
	$options[] = array(
		'name' => __('Filmmakers Links','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('For Filmmakers','options_framework_theme'),
		'id' => 'for filmmakers',
		'std' => '#For Filmmakers',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Upload a Project','options_framework_theme'),
		'id' => 'upload a project',
		'std' => '#Upload a Project',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Film FAQs','options_framework_theme'),
		'id' => 'ffaqs ',
		'std' => '#Film FAQs',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Fees','options_framework_theme'),
		'id' => 'fees',
		'std' => '#Fees',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Support','options_framework_theme'),
		'id' => 'filmsupport',
		'std' => '#Film Support',
		'type' => 'text');	
		
		/*Film Finance Blog Links*/
		
	$options[] = array(
		'name' => __('Film Finance Blog Links','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('Film Finance','options_framework_theme'),
		'id' => 'fil financem',
		'std' => '#Film Finance',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Financing','options_framework_theme'),
		'id' => 'film financing',
		'std' => '#Film Financing',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Film Investors','options_framework_theme'),
		'id' => 'film investors',
		'std' => '#Film Investors',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Finance Movies','options_framework_theme'),
		'id' => 'finance movies',
		'std' => '#Finance Movies',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Funding','options_framework_theme'),
		'id' => 'film funding',
		'std' => '#Film Funding',
		'type' => 'text');	
		
		/*Investors Blog*/
	$options[] = array(
		'name' => __('Investors Blog','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('Movie Investors','options_framework_theme'),
		'id' => 'movieinvestors',
		'std' => '#Movie Investors',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Investing in movies','options_framework_theme'),
		'id' => 'investinginmovies',
		'std' => '#Investing in movies',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Angle Film Investors','options_framework_theme'),
		'id' => 'anglefilminvestors',
		'std' => '#Angle Film Investors',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Movie News','options_framework_theme'),
		'id' => 'movienewss',
		'std' => '#Movie News',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Crowdfunding','options_framework_theme'),
		'id' => 'crowdfunding',
		'std' => '#Crowdfunding',
		'type' => 'text');	
		
		/*Film Finance Blog Links*/
		
	$options[] = array(
		'name' => __('Film Finance Blog Links','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('Film Finance','options_framework_theme'),
		'id' => 'filmfinance',
		'std' => '#Film Finance1',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Financing','options_framework_theme'),
		'id' => 'filmfinancing',
		'std' => '#Film Financing1',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Film Investors','options_framework_theme'),
		'id' => 'filminvestors',
		'std' => '#Film Investors1',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Finance Movies','options_framework_theme'),
		'id' => 'financemovies',
		'std' => '#Finance Movies1',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Funding','options_framework_theme'),
		'id' => 'filmfunding1',
		'std' => '#Film Funding1',
		'type' => 'text');	
		
		/*Hedge Fund Blog*/
	$options[] = array(
		'name' => __('Hedge Fund Blog links','options_framework_theme'),
		);	
	$options[] = array(
		'name' => __('Film financing companies','options_framework_theme'),
		'id' => 'film_financingcompanies',
		'std' => '#Film financing companies',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Investment Companies','options_framework_theme'),
		'id' => 'investmentcompanies',
		'std' => '#Investment Companies',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Hedge Funds Investors','options_framework_theme'),
		'id' => 'hedgefundsinvestors',
		'std' => '#Hedge Funds Investors',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Financeing','options_framework_theme'),
		'id' => 'filmfinanceincf1',
		'std' => '#Film Financeing',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Film Finance','options_framework_theme'),
		'id' => 'filmfinance1',
		'std' => '#Film Finance',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Hedge Fund film finacning','options_framework_theme'),
		'id' => 'hedgefundfilm',
		'std' => '#Hedge Fund film finacning',
		'type' => 'text');	
		
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	return $options;
}