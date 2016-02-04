<?php

// Theme Options
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
require_once get_template_directory() . '/options.php';

add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#example_showhidden').click(function() {
        jQuery('#section-example_text_hidden').fadeToggle(400);

    });

    if (jQuery('#example_showhidden:checked').val() !== undefined) {

        jQuery('#section-example_text_hidden').show();

    }

});

</script>

<?php }

//Initial Settings

add_theme_support('post-thumbnails');
add_image_size( 'slider', 1400, 531, true );
add_image_size( 'latest-pro', 246, 147, true );
add_image_size( 'bott-caro', 120, 105, true );
add_image_size( 'team-part', 130, 130, true );
add_image_size( 'wayinst', 160, 160, true );
add_image_size( 'breaking', 60, 60, true );

//Slider
    $labels = array( 'name' => 'Slider', 'singular_name' => 'Slider', 'add_new' => 'Add New', 'add_new_item' => 'Add New Slider', 'edit_item' => 'Edit Slider', 'new_item' => 'New Slider', 'all_items' => 'All Sliders', 'view_item' => 'View Slider', 'search_items' => 'Search Sliders', 'not_found' =>  'No Sliders found', 'not_found_in_trash' => 'No Sliders found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Sliders' );
    $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'slider' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array( 'title','custom-fields','editor','thumbnail' ), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/slider.png' ); 
    register_post_type( 'slider', $args );
//Initial Settings

//Slider Inner

    $labels = array( 'name' => 'Inner Slider', 'singular_name' => 'Inner Slider', 'add_new' => 'Add New', 'add_new_item' => 'Add New Inner Slider', 'edit_item' => 'Edit Inner Slider', 'new_item' => 'New Inner Slider', 'all_items' => 'All Sliders', 'view_item' => 'View Inner Slider', 'search_items' => 'Search Sliders', 'not_found' =>  'No Sliders found', 'not_found_in_trash' => 'No Sliders found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Inner Sliders' );

    $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'innerslider' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array( 'title','custom-fields','editor','thumbnail' ), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/slider.png' ); 

    register_post_type( 'innerslider', $args );

//Menus

function register_my_menu() {

  register_nav_menu('primary',__( 'Header Menu' ));

}

add_action( 'init', 'register_my_menu' );

//Widget Area

function demo_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Ways To Invest'),
        'id'            => 'sidebar-invest',
        'description'   => __( 'Appears in "Ways to Invest" text.'),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        'name'          => __( 'Investor post1'),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the footer section of the site.'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ));

    register_sidebar( array(
        'name'          => __( 'Batman vs. Superman'),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears in the footer section of the site.'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h2 class="widget-title">',

        'after_title'   => '</h2>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Register'),

        'id'            => 'sidebar-3',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h2 class="widget-title">',

        'after_title'   => '</h2>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Browse'),

        'id'            => 'sidebar-4',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h2 class="widget-title">',

        'after_title'   => '</h2>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Select'),

        'id'            => 'sidebar-5',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h2 class="widget-title">',

        'after_title'   => '</h2>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Review'),

        'id'            => 'sidebar-6',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h2 class="widget-title">',

        'after_title'   => '</h2>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Important Message'),

        'id'            => 'sidebar-7',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Tweet feed1'),

        'id'            => 'sidebar-8',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Face book feed'),

        'id'            => 'sidebar-9',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Instagram feed'),

        'id'            => 'sidebar-10',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Get Started'),

        'id'            => 'sidebar-11',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    

    register_sidebar( array(

        'name'          => __( 'Browse'),

        'id'            => 'sidebar-12',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Legal'),

        'id'            => 'sidebar-13',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Crowd funder'),

        'id'            => 'sidebar-14',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Custom Twitter Feed'),

        'id'            => 'sidebar-15',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4 class="widget-title">',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'Investor About us'),

        'id'            => 'sidebar-16',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4>',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __('Investor Knowledge Center'),

        'id'            => 'sidebar-17',

        'description'   => __( 'Appears in the footer section of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h4>',

        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(

        'name'          => __( 'RSS News One'),

        'id'            => 'sidebar-77',

        'description'   => __( 'Appears in the RSS News page first column of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h6 class="widget-title">',

        'after_title'   => '</h6>',

    ) );
    register_sidebar( array(

        'name'          => __( 'RSS News Two'),

        'id'            => 'sidebar-78',

        'description'   => __( 'Appears in the RSS News page Second column of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h6 class="widget-title">',

        'after_title'   => '</h6>',

    ) );
    register_sidebar( array(

        'name'          => __( 'RSS News Three'),

        'id'            => 'sidebar-79',

        'description'   => __( 'Appears in the RSS News page third column of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h6 class="widget-title">',

        'after_title'   => '</h6>',

    ) );
    register_sidebar( array(

        'name'          => __( 'RSS News Four'),

        'id'            => 'sidebar-80',

        'description'   => __( 'Appears in the RSS News page fourth column of the site.'),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<h6 class="widget-title">',

        'after_title'   => '</h6>',

    ) );



}

add_action( 'widgets_init', 'demo_widgets_init' );

/*Featured Image*/

add_action('after_setup_theme', 'x_setup_image_sizes');

function x_setup_image_sizes() {
    add_image_size('article-image'); 
    the_post_thumbnail('article-image');
}

/*Post types*/

add_action('init', 'welcome_register');

function welcome_register() {

  $labels = array(

   'name' => _x('welcome', 'post type general name'),'singular_name' => _x('welcome Item', 'post type singular name'),

   'add_new' => _x('Add New', 'welcome item'),'add_new_item' => __('Add New welcome Item'),

   'edit_item' => __('Edit welcome Item'),'new_item' => __('New welcome Item'),'view_item' => __('View welcome Item'),

   'search_items' => __('Search welcome'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor', 'thumbnail')

    );

    register_post_type('welcome', $args);

    }

    

    

add_action('init', 'Invest_register');

function Invest_register() {

  $labels = array(

   'name' => _x('Invest', 'post type general name'),'singular_name' => _x('invest Item', 'post type singular name'),

   'add_new' => _x('Add New', 'invest item'),'add_new_item' => __('Add New invest Item'),

   'edit_item' => __('Edit invest Item'),'new_item' => __('New invest Item'),'view_item' => __('View invest Item'),

   'search_items' => __('Search invest'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','custom-fields','editor', 'thumbnail')

    );

    register_post_type('invest', $args);

    }   

    

add_action('init', 'Testi_register');

function Testi_register() {

$labels = array(

        'name'              => _x( 'Testimonial', 'taxonomy general name' ),

        'singular_name'     => _x( 'Testimonial', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Testimonial' ),

        'all_items'         => __( 'All Testimonial' ),

        'parent_item'       => __( 'Parent Testimonial' ),

        'parent_item_colon' => __( 'Parent Testimonial:' ),

        'edit_item'         => __( 'Edit Testimonial' ),

        'update_item'       => __( 'Update Testimonial' ),

        'add_new_item'      => __( 'Add New Testimonial' ),

        'new_item_name'     => __( 'New Testimonial Name' ),

        'menu_name'         => __( 'Testimonial' ),

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/testimonial.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor', 'thumbnail')

    );

$cat = array(

        'name'              => _x( 'Testimonial Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'Testimonial Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Testimonial Category' ),

        'all_items'         => __( 'All Testimonial Category' ),

        'parent_item'       => __( 'Parent Testimonial Category' ),

        'parent_item_colon' => __( 'Parent Testimonial Category:' ),

        'edit_item'         => __( 'Edit Testimonial Category' ),

        'update_item'       => __( 'Update Testimonial Category' ),

        'add_new_item'      => __( 'Add New Testimonial Category' ),

        'new_item_name'     => __( 'New Testimonial Category Name' ),

        'menu_name'         => __( 'Testimonial Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'category' ),

    );

    register_taxonomy( 'testimonial_category', array( 'testimonial' ), $catarg );

    register_post_type('testimonial', $args);

    }

    

add_action('init', 'Teampartners_register');

function Teampartners_register() {

  $labels = array(

   'name' => _x('Team & Partners', 'post type general name'),'singular_name' => _x('Team & Partners Item', 'post type singular name'),

   'add_new' => _x('Add New', 'Team & Partners item'),'add_new_item' => __('Add New Team & Partners Item'),

   'edit_item' => __('Edit Team & Partners Item'),'new_item' => __('New Team & Partners Item'),'view_item' => __('View Team & Partners Item'),

   'search_items' => __('Search Team & Partners'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/clients.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor', 'thumbnail')

    );

$cat = array(

        'name'              => _x( 'Team & Partners Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'Team & Partners Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Team & Partners Category' ),

        'all_items'         => __( 'All Team & Partners Category' ),

        'parent_item'       => __( 'Parent Team & Partners Category' ),

        'parent_item_colon' => __( 'Parent Team & Partners Category:' ),

        'edit_item'         => __( 'Edit Team & Partners Category' ),

        'update_item'       => __( 'Update Team & Partners Category' ),

        'add_new_item'      => __( 'Add New Team & Partners Category' ),

        'new_item_name'     => __( 'New Team & Partners Category Name' ),

        'menu_name'         => __( 'Team & Partners Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'category' ),

    );

    register_taxonomy( 'teampartners_category', array( 'teampartners' ), $catarg );

    register_post_type('teampartners', $args);

    }

add_action('init', 'Latest_projects');

function Latest_projects() {

  $labels = array(

   'name' => _x('Latest Projects', 'post type general name'),'singular_name' => _x('Latest Projects Item', 'post type singular name'),

   'add_new' => _x('Add New', 'Latest Projects item'),'add_new_item' => __('Add New Latest Projects Item'),

   'edit_item' => __('Edit Latest Projects Item'),'new_item' => __('New Latest Projects Item'),'view_item' => __('View Latest Projects Item'),

   'search_items' => __('Search Latest Projects'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor','custom-fields', 'thumbnail')

    );

    register_post_type('latestprojects', $args);

    }
    //adding new custom post type
    function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'User Projects', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'User Project', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'User Projects', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent User Project', 'twentythirteen' ),
        'all_items'           => __( 'All User Projects', 'twentythirteen' ),
        'view_item'           => __( 'View User Project', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New User Project', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit User Project', 'twentythirteen' ),
        'update_item'         => __( 'Update User Project', 'twentythirteen' ),
        'search_items'        => __( 'Search User Project', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
    
// Set other options for Custom Post Type
    
    $args = array(
        'label'               => __( 'User Project', 'twentythirteen' ),
        'description'         => __( 'User Project news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */  
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    
    // Registering your Custom Post Type
    register_post_type( 'UserProject', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );

    

add_action('init', 'The_News');

function The_News() {

  $labels = array(

   'name' => _x('The News', 'post type general name'),'singular_name' => _x('The News Item', 'post type singular name'),

   'add_new' => _x('Add New', 'The News item'),'add_new_item' => __('Add New The News Item'),

   'edit_item' => __('Edit The News Item'),'new_item' => __('New The News Item'),'view_item' => __('View Latest Projects Item'),

   'search_items' => __('Search The News'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/news.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','custom-fields','thumbnail')

    );

    register_post_type('thenews', $args);

    }   

    

add_action('init', 'FA_Qs');

function FA_Qs() {

  $labels = array(

   'name' => _x('FAQs', 'post type general name'),'singular_name' => _x('The News Item', 'post type singular name'),

   'add_new' => _x('Add New', 'FAQs item'),'add_new_item' => __('Add New FAQs Item'),

   'edit_item' => __('Edit FAQs Item'),'new_item' => __('New FAQs Item'),'view_item' => __('View FAQs Item'),

   'search_items' => __('Search FAQs'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/faq.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','editor','thumbnail')

    );

$cat = array(

        'name'              => _x( 'FAQs Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'FAQs Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search FAQs Category' ),

        'all_items'         => __( 'All FAQs Category' ),

        'parent_item'       => __( 'Parent FAQs Category' ),

        'parent_item_colon' => __( 'Parent FAQs Category:' ),

        'edit_item'         => __( 'Edit FAQs Category' ),

        'update_item'       => __( 'Update FAQs Category' ),

        'add_new_item'      => __( 'Add New FAQs Category' ),

        'new_item_name'     => __( 'New FAQs Category Name' ),

        'menu_name'         => __( 'FAQs Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'category' ),

    );

    register_taxonomy( 'FAQs_cat', array( 'faqs' ), $catarg );

    register_post_type('faqs', $args);

    }   

    

    

add_action('init', 'Top_carosule');

function Top_carosule() {

  $labels = array(

   'name' => _x('Top Carousel', 'post type general name'),'singular_name' => _x('Top Carousel Item', 'post type singular name'),

   'add_new' => _x('Add New', 'Top Carousel item'),'add_new_item' => __('Add New Top Carousel Item'),

   'edit_item' => __('Edit Top Carousel Item'),'new_item' => __('New Top Carousel Item'),'view_item' => __('View Top Carousel Item'),

   'search_items' => __('Search Top Carousel'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','editor','thumbnail')

    );

    register_post_type('topcarosule', $args);

    }

    

add_action('init', 'Breaking_news');

function Breaking_news() {

  $labels = array(

   'name' => _x('Breaking News', 'post type general name'),'singular_name' => _x('Breaking News Item', 'post type singular name'),

   'add_new' => _x('Add New', 'Breaking News item'),'add_new_item' => __('Add New Breaking News Item'),

   'edit_item' => __('Edit Breaking News Item'),'new_item' => __('New Breaking News Item'),'view_item' => __('View Breaking News Item'),

   'search_items' => __('Search Breaking News'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','editor','thumbnail')

    );

    register_post_type('breakingnews', $args);

    }


add_action('init','add_featured');
function add_featured() {
    $labels = array(
        'name'              => _x( 'Featured', 'taxonomy general name' ),
        'singular_name'     => _x( 'Featured', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Featured' ),
        'all_items'         => __( 'All Featured' ),
        'parent_item'       => __( 'Parent Featured' ),
        'parent_item_colon' => __( 'Parent Featured:' ),
        'edit_item'         => __( 'Edit Featured' ),
        'update_item'       => __( 'Update Featured' ),
        'add_new_item'      => __( 'Add New Featured' ),
        'new_item_name'     => __( 'New Featured Name' ),
        'menu_name'         => __( 'Featured' ),
    );
    $args = array(
       'labels' => $labels,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'query_var' => true,
       'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png',
       'rewrite' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'menu_position' => null,
       'has_archive' => false, 
       'supports' => array('title','excerpt')
    );
    register_post_type('featured',$args);
}



add_action('init', 'Featured_pro');
function Featured_pro() {
    $labels = array(
        'name'              => _x( 'Featured Project', 'taxonomy general name' ),
        'singular_name'     => _x( 'Featured Project', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Featured Project' ),
        'all_items'         => __( 'All Featured Project' ),
        'parent_item'       => __( 'Parent Featured Project' ),
        'parent_item_colon' => __( 'Parent Featured Project:' ),
        'edit_item'         => __( 'Edit Featured Project' ),
        'update_item'       => __( 'Update Featured Project' ),
        'add_new_item'      => __( 'Add New Featured Project' ),
        'new_item_name'     => __( 'New Featured Project Name' ),
        'menu_name'         => __( 'Featured Project' ),
    );

    $args = array(
       'labels' => $labels,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'query_var' => true,
       'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png',
       'rewrite' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'menu_position' => null,
       'has_archive' => true, 
       'supports' => array('title', 'editor', 'thumbnail')
    );

    $cat = array(
        'name'              => _x( 'Featured Category', 'taxonomy general name' ),
        'singular_name'     => _x( 'Featured Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Featured Category' ),
        'all_items'         => __( 'All Featured Category' ),
        'parent_item'       => __( 'Parent Featured Category' ),
        'parent_item_colon' => __( 'Parent Featured Category:' ),
        'edit_item'         => __( 'Edit Featured Category' ),
        'update_item'       => __( 'Update Featured Category' ),
        'add_new_item'      => __( 'Add New Featured Category' ),
        'new_item_name'     => __( 'New Featured Category Name' ),
        'menu_name'         => __( 'Featured Category' ),
    );

    $catarg = array(
        'hierarchical'      => true,
        'labels'            => $cat,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'category' ),
    );
    register_taxonomy( 'featured_category', array( 'featuredpro' ), $catarg );
    register_post_type('featuredpro', $args);
}

add_action('init', 'page_post');
function page_post() {

$labels = array(

        'name'              => _x( 'Page Post', 'taxonomy general name' ),

        'singular_name'     => _x( 'Page Post', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Page Post' ),

        'all_items'         => __( 'All Page Posts' ),

        'parent_item'       => __( 'Parent Page Post' ),

        'parent_item_colon' => __( 'Parent Page Post:' ),

        'edit_item'         => __( 'Edit Page Post' ),

        'update_item'       => __( 'Update Page Post' ),

        'add_new_item'      => __( 'Add New Page Post' ),

        'new_item_name'     => __( 'New Page Post Name' ),

        'menu_name'         => __( 'Page Post' ),

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor', 'thumbnail')

    );

$cat = array(

        'name'              => _x( 'Page Post Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'Page Post Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Page Post Category' ),

        'all_items'         => __( 'All Page Posts Category' ),

        'parent_item'       => __( 'Parent Page Post Category' ),

        'parent_item_colon' => __( 'Parent Page Post Category:' ),

        'edit_item'         => __( 'Edit Page Post Category' ),

        'update_item'       => __( 'Update Page Post Category' ),

        'add_new_item'      => __( 'Add New Page Post Category' ),

        'new_item_name'     => __( 'New Page Post Category Name' ),

        'menu_name'         => __( 'Page Post Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'category' ),

    );

    register_taxonomy( 'pagepost_category', array( 'page_post' ), $catarg );

    register_post_type('page_post', $args);

    }



add_action('init', 'How_It_Works');

function How_It_Works() {

  $labels = array(

   'name' => _x('How It Works', 'post type general name'),'singular_name' => _x('How It Works Item', 'post type singular name'),

   'add_new' => _x('Add New', 'How It Works item'),'add_new_item' => __('Add New How It Works Item'),

   'edit_item' => __('Edit How It Workss Item'),'new_item' => __('New How It Works Item'),'view_item' => __('View How It Works Item'),

   'search_items' => __('Search How It Works'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/faq.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title', 'editor','custom-fields', 'thumbnail')

    );

$cat = array(

        'name'              => _x( 'How It Works Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'How It Works Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search How It Works Category' ),

        'all_items'         => __( 'How It Works Category' ),

        'parent_item'       => __( 'Parent How It Works Category' ),

        'parent_item_colon' => __( 'Parent How It Works Category:' ),

        'edit_item'         => __( 'Edit How It Works Category' ),

        'update_item'       => __( 'Update How It Works Category' ),

        'add_new_item'      => __( 'Add New How It Works Category' ),

        'new_item_name'     => __( 'New How It Works Category Name' ),

        'menu_name'         => __( 'How It Works Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'how_it_works' ),

    );

    register_taxonomy( 'how_it_works', array( 'how_it' ), $catarg );

    register_post_type('how_it', $args);

    }

    

add_action('init', 'Trailers');

function Trailers() {

  $labels = array(

   'name' => _x('Trailers & Clips', 'post type general name'),'singular_name' => _x('Trailers & Clips Item', 'post type singular name'),

   'add_new' => _x('Add New', 'Trailers & Clips item'),'add_new_item' => __('Add New Trailers & Clips Item'),

   'edit_item' => __('Edit Trailers & Clips Item'),'new_item' => __('New Trailers & Clips Item'),'view_item' => __('View Trailers & Clips Item'),

   'search_items' => __('Search Trailers & Clips'),'not_found' => __('Nothing found'),'not_found_in_trash' => __('Nothing found in Trash'),

   'parent_item_colon' => ''

    );

    $args = array(

   'labels' => $labels,'public' => true,'publicly_queryable' => true,'show_ui' => true,'query_var' => true,

   'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png','rewrite' => true,'capability_type' => 'post','hierarchical' => false,

   'menu_position' => null,'supports' => array('title','editor','thumbnail')

    );

$cat = array(

        'name'              => _x( 'Trailers & Clips Category', 'taxonomy general name' ),

        'singular_name'     => _x( 'Trailers & Clips Category', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Trailers & Clips Category' ),

        'all_items'         => __( 'All Trailers & Clips Category' ),

        'parent_item'       => __( 'Parent Trailers & Clips Category' ),

        'parent_item_colon' => __( 'Parent Trailers & Clips Category:' ),

        'edit_item'         => __( 'Edit Trailers & Clips Category' ),

        'update_item'       => __( 'Update Trailers & Clips Category' ),

        'add_new_item'      => __( 'Add New Trailers & Clips Category' ),

        'new_item_name'     => __( 'New Trailers & Clips Category Name' ),

        'menu_name'         => __( 'Trailers & Clips Category' ),

    );

    $catarg = array(

        'hierarchical'      => true,

        'labels'            => $cat,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'category' ),

    );

    register_taxonomy( 'trailers_category', array( 'trailers' ), $catarg );

    register_post_type('trailers', $args);

    }

/*Post type functions*/

function Welcome() {    



global $post;   

$i = 1; 

    echo '<div class="row">';

    $args = array('suppress_filters' => true,'posts_per_page' => 2,'post_type' => 'welcome','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

<div class="col-sm-6">

  <h2><?php the_title(); ?></h2><br />

    <div class="row">

    <div class="col-sm-5">

    <?php the_post_thumbnail('article-image',array('class' => "img-responsive")); ?>

    </div>

                    <?//php echo substr(get_the_excerpt(), 0, 150); ?>

    <div class="col-sm-6">

    <?php the_content(); ?>

    </div>

    </div>

    </div>

<?php

    }wp_reset_query();

?>

</div>

<?php

}

function Invest() {     
    global $post;
    $i = 1;
    echo '<div class="row">';
    $args = array('suppress_filters' => true,'posts_per_page' => 4,'post_type' => 'invest','order' => 'ASC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) { setup_postdata($post);
        $meta = get_post_meta(get_the_id());
        $key = get_post_meta($post->ID, 'overtext1');
    ?>
    <div class="col-sm-3">
        <div class="invest-box">
            <a href="<?php print_r($meta[link][0]);?>" class="superTrigger"><?php the_post_thumbnail('wayinst'); ?>
                <div class="blue text-center">
                    <i class="fa fa-plus"></i>
                    <h6><?php print_r($meta[link][1]);?><br/><?php print_r($meta[link][2]);?></h6>
                </div>
            </a>

            <h5><?php the_title(); ?></h5>
            <a href="<?php the_permalink();?>"><?php the_content(); ?></a>
            <div class="way-invstbx">
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Min.Investment</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("min.investment"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Raising</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("raising"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>For 15% Equity</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("for_15%_equity"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Average Carry</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("average_carry"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Interest per anumm</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("interest_per_anumm"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>RIO</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("rio"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 jeba_invest">
                        <div class="button text-center">

                        <ul class="list-inline">

                            <li><a href="<?php the_field("rio_invest"); ?>" class="btn btn-6">INVEST NOW</a></li>

                        </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

<?php } wp_reset_query();?>
</div>
<?php }



function category1() {

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'testimonial','testimonial_category' => 'Investors','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

    <div class="item <?php if($i == 1){?> active <?php $i++; }?>">

            <div class="row">

            <div class="col-sm-3">

              <?php the_post_thumbnail('team-part'); ?>

            </div>

            <div class="col-sm-9">

                <?php the_content();?>

            </div>

            </div>

            <div class="cartoon text-center">           

            <div class="row">       

                <?php 

                    $image1 = get_field('movie_poster1');       

                    $image2 = get_field('movie_poster2'); 

                    $image3 = get_field('movie_poster3'); 

                ?>

                <?php if( !empty($image1)): ?>          

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image1['url']; ?>"/></center>

                <p><?php the_field("movie_tit1"); ?></p>

                </div>

                <?php endif; ?>

                <?php if( !empty($image1)): ?>  

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image2['url']; ?>"/></center>

                                <p><?php the_field("movie_tit2"); ?></p>

                </div>

                <?php endif; ?>

    

                <?php if( !empty($image1)): ?>  

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image3['url']; ?>"/></center>

                <p><?php the_field("movie_tit3"); ?></p>

                </div>

                <?php endif; ?>

            </div>

                     </div>

    </div>

<?php

}

}

function category2() {

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'testimonial','testimonial_category' => 'Film Makers','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

    <div class="item <?php if($i == 1){?> active <?php $i++; }?>">

            <div class="row">

            <div class="col-sm-3">

              <?php the_post_thumbnail('team-part'); ?>

            </div>

            <div class="col-sm-9">

                <?php the_content();?>

            </div>

            </div>

            

            <div class="row">       

                <?php 

                    $image1 = get_field('movie_poster1');       

                    $image2 = get_field('movie_poster2'); 

                    $image3 = get_field('movie_poster3'); 

                ?>

                <?php if( !empty($image1)): ?>          

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image1['url']; ?>"/></center>

                                <p><?php the_field("movie_tit1"); ?></p>

                </div>

                <?php endif; ?>

                <?php if( !empty($image1)): ?>  

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image2['url']; ?>"/></center>

                <p><?php the_field("movie_tit2"); ?></p>

                </div>

                <?php endif; ?>

                <?php if( !empty($image1)): ?>  

                <div class="col-sm-4 col-xs-4">

                <center><img src="<?php echo $image3['url']; ?>"/></center>

                <p><?php the_field("movie_tit3"); ?></p>

                </div>

                <?php endif; ?>

            </div>

    </div>

<?php

}

}

function test_inner() {
?>
<div class="carousel-inner"> 
<?php
global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'testimonial','testimonial_category' => 'inner-testimonial','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

    <div class="item <?php if($i == 1){?> active <?php $i++; }?>">

            <div class="tsti-content">

            <div class="tsti-posters">

              <?php the_post_thumbnail('team-part'); ?>

            </div>

            <div class="tsti-txt">

                <?php the_content();?>

            </div>

            </div>

            

    </div>

<?php
$i++;?>

<?php
}
?>
</div>
<div class="carousel-nav testi-indi">

                    <ol class="carousel-indicators">

                         <?php 

                        foreach( $myposts as $key => $post ) { setup_postdata($post); ?>

                            <li data-target="#carousel-test" data-slide-to="<?php echo $key;?>" <?php if($key == 0){?>class="active"<?php } ?>></li>

                        <?php }?>

                    </ol>

                    </div>
<?php
}


function Team() {   
global $post;   
$i = 1;
    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'teampartners','order' => 'DESC' );

    $myposts = get_posts( $args );

    $count = count($myposts);

    $active = 0;

    for( $i = 0; $i <= $count; $i+=5 ){?>

    <div class="item <?php if($active == 0){?> active<?php } $active++; ?>">

        <div class="row">

        <?php for( $j = $i; $j < $i + 5; $j++ ){

            $posts = $myposts[$j];

            if( $myposts[$j] != '' ){

            $post = get_post($posts->ID);

            setup_postdata( $post );

            ?>

            <div class="col-sm-5ths">

                <div class="all">

                    <div class="invest-box">

                        <a target="_blank" href="<?php echo home_url();?>/team/">

                <?php the_post_thumbnail( 'team-part',array('class' =>'team-size')); ?>

                        

                            <div class="blue text-center">

                                <h6>Click<br/> here</h6>

                            </div>

                        </a>

                    </div>

                   <div class="team-excerpt">

                    <h4><?php the_title(); ?></h4>
                    <h5><?php the_field( "job" );?></h5>

                    

                    <p><?php echo substr(get_the_excerpt(), 0, 90); ?></p>
                        <a style="color:#E55403" href="<?php the_permalink(); ?>">read more...</a>
                    </div>

                    <div class="row">

                    <?php 

                    $image1 = get_field('movie_poster1'); 

                    $image2 = get_field('movie_poster2');

                    ?>

                    <?php if( !empty($image1) || !empty($image2) ): ?>

                        <ul class="list-inline team-pstrs">
                        <li class="team-xsim"><img class="img-responsive" src="<?php echo $image1['url']; ?>"/></li>
                        <l class="team-xsim"><img class="img-responsive" src="<?php echo $image2['url']; ?>"/></li>
                        </ul>

                    <?php endif; ?>

                    </div>

                </div>    

            </div>

        <?php }

        }?>

        </div>

    </div>

    <?php }

?>

<?php

}

function Team_mob() {   

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'teampartners','order' => 'DESC' );

    $myposts = get_posts( $args );

    $count = count($myposts);

    $active = 0;

    for( $i = 0; $i <= $count; $i+=2 ){?>

    <div class="item <?php if($active == 0){?> active<?php } $active++; ?>">

        <div class="row">

        <?php for( $j = $i; $j < $i + 1; $j++ ){

            $posts = $myposts[$j];

            if( $myposts[$j] != '' ){

            $post = get_post($posts->ID);

            setup_postdata( $post );

            ?>

            <div class="col-sm-5ths">

                <div class="all">

                    <div class="invest-box">

                        <a target="_blank" href="<?php echo home_url();?>/team_patrners/">

                <?php the_post_thumbnail( 'team-part',array('class' =>'team-size')); ?>

                        

                            <div class="blue text-center">

                                <h6>Click<br/> here</h6>

                            </div>

                        </a>

                    </div>

                   <div class="team-excerpt">

                    <h4><?php the_title(); ?></h4>

                    

                    <p><?php echo substr(get_the_excerpt(), 0, 80); ?></p>
                    <a style="color:#E55403" href="<?php the_permalink(); ?>">read more...</a>

                    </div>

                    <div class="row">

                    <?php 

                    $image1 = get_field('movie_poster1'); 

                    $image2 = get_field('movie_poster2');

                    ?>

                    <?php if( !empty($image1) || !empty($image2) ): ?>

                        <div class="col-xs-6 col-sm-12 col-md-6"><div class="team-xsim"><center><img src="<?php echo $image1['url']; ?>"/></center></div></div>

                        <div class="col-xs-6 col-sm-12 col-md-6"><div class="team-xsim"><center><img src="<?php echo $image2['url']; ?>"/></center></div></div>

                    <?php endif; ?>

                    </div>

                </div>    

            </div>

        <?php }

        }?>

        </div>

    </div>

    <?php }

?>

<?php

}






function Latest_projrcts_modified() {   

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'latestprojects','order' => 'ASC' );

    $myposts = get_posts( $args );

    $count = count($myposts);

    $active = 0;

    //for( $i = 0; $i <= $count; $i+=7 ){?> 

    <div class="item <?php if($active == 0){?> active<?php } $active++; ?>">

        <div class="row">

        <?php for( $j = 0; $j<$count; $j++ ){

            $posts = $myposts[$j];

            if( $myposts[$j] != '' ){

            $post = get_post($posts->ID);

            setup_postdata( $post );

$meta = get_post_meta(get_the_id());

$key_1_values = get_post_meta( get_the_ID(), '' ,true );

$field = get_field_object('budget');

$field1 = get_field_object('genre');

$field2 = get_field_object('compares');

$field3 = get_field_object('tax_breaks');

$field4 = get_field_object('team');

$field5 = get_field_object('cast');

$field6 = get_field_object('investor_info');

$field7 = get_field_object('target');

$field8 = get_field_object('invested');

$field9 = get_field_object('pledged');

$field10 = get_field_object('investers');

?>

    <div class="col-md-3 col-sm-6 movie_home">

    <div class="pro-box">

    <div class="img-thumb">

    <h4><?php the_title(); ?></h4><br />

    

    <a target="_blank" href="<?php print_r($meta[link][0]);?>"><?php the_post_thumbnail('latest-pro',array('class' => "img-responsive")); ?></a>

    </div>

    <div class="pro-content">

      <p><?php echo substr(get_the_content(), 0, 80); ?><span class="remore" data-mode="hide" data-id="re-<?php echo get_the_ID();?>">read more...</span> </p>

      <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>          

     </div>

<div class="pro-table margin-t">

<div class="scrollbars">
<div class="table-responsive">
<div class="table">


<div class="latst-filds">

<div class="orange"><?php echo $field['label']; ?></div>
<div class="fild-st"><?php the_field( "budget" );?></div>

</div>

<div class="latst-filds">
<div class="orange"><?php echo $field1['label']; ?></div>
<div class="fild-st"><?php the_field( "genre" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field2['label']; ?></div>
<div class="fild-st"><?php the_field( "compares" );?></div>
</div>


<div class="latst-filds">
<div class="orange"><?php echo $field3['label']; ?></div>
<div class="fild-st"><?php the_field( "tax_breaks" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field4['label']; ?></div>

<div class="fild-st"><?php the_field( "team" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field5['label']; ?></div>
<div class="fild-st"><?php the_field( "cast" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field6['label']; ?></div>
<div class="fild-st"><?php the_field( "investor_info" );?></div>
</div>

</div>
</div>
</div>

<div class="lig gh-<?php echo get_the_ID();?>">

<?php 

$grap = get_field('graph'); 

?>

<?php if( !empty($grap) ): ?>

<img src="<?php echo $grap['url']; ?>"/>

<?php else: ?>

<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />

<?php endif; ?>

<!--<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />-->

</div>

</div>

<div class="pro-bottom">

<ul class="list-inline">

<li>

<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>

</li>

<li><a href="#"><span><?php the_field( "target" );?></span><br/> <?php echo $field7['label']; ?></a></li>

<li><a href="#"><span> <?php the_field( "invested" );?></span><br/><?php echo $field8['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "pledged" );?></span> <br/><?php echo $field9['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "investers" );?></span> <br/><?php echo $field10['label']; ?></a></li>

</ul>

</div>

    </div>

    </div>

        <?php }

        }?>

        </div>

    </div>

    <?php //}

?>

<?php

}




function Latest_projrcts() {    

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'latestprojects','order' => 'ASC' );

    $myposts = get_posts( $args );

    $count = count($myposts);

    $active = 0;

    for( $i = 0; $i <= $count; $i+=7 ){?>

    <div class="item <?php if($active == 0){?> active<?php } $active++; ?>">

        <div class="row">

        <?php for( $j = $i; $j < $i + 8; $j++ ){

            $posts = $myposts[$j];

            if( $myposts[$j] != '' ){

            $post = get_post($posts->ID);

            setup_postdata( $post );

$meta = get_post_meta(get_the_id());

$key_1_values = get_post_meta( get_the_ID(), '' ,true );

$field = get_field_object('budget');

$field1 = get_field_object('genre');

$field2 = get_field_object('compares');

$field3 = get_field_object('tax_breaks');

$field4 = get_field_object('team');

$field5 = get_field_object('cast');

$field6 = get_field_object('investor_info');

$field7 = get_field_object('target');

$field8 = get_field_object('invested');

$field9 = get_field_object('pledged');

$field10 = get_field_object('investers');

?>

    <div class="col-md-3 col-sm-6">

    <div class="pro-box">

    <div class="img-thumb">

    <h4><?php the_title(); ?></h4><br />

    

    <a target="_blank" href="<?php print_r($meta[link][0]);?>"><?php the_post_thumbnail('latest-pro',array('class' => "img-responsive")); ?></a>

    </div>

    <div class="pro-content">

      <p><?php echo substr(get_the_content(), 0, 80); ?><span class="remore" data-mode="hide" data-id="re-<?php echo get_the_ID();?>">read more...</span> </p>

      <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>          

     </div>

<div class="pro-table margin-t">

<div class="scrollbars">
<div class="table-responsive">
<div class="table">


<div class="latst-filds">

<div class="orange"><?php echo $field['label']; ?></div>
<div class="fild-st"><?php the_field( "budget" );?></div>

</div>

<div class="latst-filds">
<div class="orange"><?php echo $field1['label']; ?></div>
<div class="fild-st"><?php the_field( "genre" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field2['label']; ?></div>
<div class="fild-st"><?php the_field( "compares" );?></div>
</div>


<div class="latst-filds">
<div class="orange"><?php echo $field3['label']; ?></div>
<div class="fild-st"><?php the_field( "tax_breaks" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field4['label']; ?></div>

<div class="fild-st"><?php the_field( "team" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field5['label']; ?></div>
<div class="fild-st"><?php the_field( "cast" );?></div>
</div>

<div class="latst-filds">
<div class="orange"><?php echo $field6['label']; ?></div>
<div class="fild-st"><?php the_field( "investor_info" );?></div>
</div>

</div>
</div>
</div>

<div class="lig gh-<?php echo get_the_ID();?>">

<?php 

$grap = get_field('graph'); 

?>

<?php if( !empty($grap) ): ?>

<img src="<?php echo $grap['url']; ?>"/>

<?php else: ?>

<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />

<?php endif; ?>

<!--<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />-->

</div>

</div>

<div class="pro-bottom">

<ul class="list-inline">

<li>

<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>

</li>

<li><a href="#"><span><?php the_field( "target" );?></span><br/> <?php echo $field7['label']; ?></a></li>

<li><a href="#"><span> <?php the_field( "invested" );?></span><br/><?php echo $field8['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "pledged" );?></span> <br/><?php echo $field9['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "investers" );?></span> <br/><?php echo $field10['label']; ?></a></li>

</ul>

</div>

    </div>

    </div>

        <?php }

        }?>

        </div>

    </div>

    <?php }

?>

<?php

}


function Latest_projrcts_mob() {    

global $post;   

$i = 1;

    $args = array('numberposts' => 5,'suppress_filters' => true,'post_type' => 'latestprojects','order' => 'ASC' );

    $myposts = get_posts( $args );

    $count = count($myposts);?>



        

    <?php

    foreach( $myposts as $key => $post ) { setup_postdata($post);

$meta = get_post_meta(get_the_id());

$key_1_values = get_post_meta( get_the_ID(), '' ,true );

$field = get_field_object('budget');

$field1 = get_field_object('genre');

$field2 = get_field_object('compares');

$field3 = get_field_object('tax_breaks');

$field4 = get_field_object('team');

$field5 = get_field_object('cast');

$field6 = get_field_object('investor_info');

$field7 = get_field_object('target');

$field8 = get_field_object('invested');

$field9 = get_field_object('pledged');

$field10 = get_field_object('investers');

?>

<div class="slide">

    <div class="col-sm-12">

    <div class="pro-box">

    <div class="img-thumb">

    <h4><?php the_title(); ?></h4><br />

    

    <a target="_blank" href="<?php print_r($meta[link][0]);?>"><?php the_post_thumbnail('latest-pro',array('class' => "img-responsive")); ?></a>

    </div>

    <div class="pro-content">

      <p><?php echo substr(get_the_content(), 0, 80); ?><span class="remore" data-mode="hide" data-id="re-<?php echo get_the_ID();?>">read more...</span> </p>

      <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>          

     </div>

<div class="pro-table margin-t">

<div class="scrollbars">

<table class="table">

<tbody>

<tr>

<td class="orange"><?php echo $field['label']; ?></td>

<td><?php the_field( "budget" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field1['label']; ?></td>

<td><?php the_field( "genre" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field2['label']; ?></td>

<td><?php the_field( "compares" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field3['label']; ?></td>

<td><?php the_field( "tax_breaks" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field4['label']; ?></td>

<td><?php the_field( "team" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field5['label']; ?></td>

<td><?php the_field( "cast" );?></td>

</tr>

<tr>

<td class="orange"><?php echo $field6['label']; ?></td>

<td><?php the_field( "investor_info" );?></td>

</tr>

</tbody>

</table>

</div>

<div class="lig gh-<?php echo get_the_ID();?>">

<?php 

$grap = get_field('graph'); 

?>

<?php if( !empty($grap) ): ?>

<img src="<?php echo $grap['url']; ?>"/>

<?php else: ?>

<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />

<?php endif; ?>

<!--<img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />-->

</div>

</div>

<div class="pro-bottom">

<ul class="list-inline">

<li>

<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>

</li>

<li><a href="#"><span><?php the_field( "target" );?></span><br/> <?php echo $field7['label']; ?></a></li>

<li><a href="#"><span> <?php the_field( "invested" );?></span><br/><?php echo $field8['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "pledged" );?></span> <br/><?php echo $field9['label']; ?></a></li>

<li><a href="#"><span><?php the_field( "investers" );?></span> <br/><?php echo $field10['label']; ?></a></li>

</ul>

</div>

    </div>

    </div>

</div>    

    



    <?php }

?>





<?php

}


function Movie_found_blog_investors() {     

global $post;   

$i = 1;



    $args = array('suppress_filters' => true,'posts_per_page' => 1,'category_name' => 'Investors News','post_type' => 'post','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

    <h5><?php the_title(); ?></h5>              

    <?php the_content(); ?>

    <div class="more text-right">

    <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-circle-o-right"></i></a>

    </div>   

<?php

    }wp_reset_query();

?>

<?php

}

function Movie_found_blog_movie_news() {    

global $post;   

$i = 1;

    

    $args = array('suppress_filters' => true,'posts_per_page' => 1,'category_name' => 'Latest movie News','post_type' => 'post','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

    <h5><?php the_title(); ?></h5>              

    <?php the_content(); ?>

    <div class="more text-right">

    <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-circle-o-right"></i></a>

    </div>   

<?php

    }wp_reset_query();

?>

<?php

}

function FAQsodd() {

    global $post;

    $i=1;

$incr = have_posts();

    $args = array('posts_per_page' => 6,'suppress_filters' => true,'post_type' => 'faqs','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

<?php if($i % 2 !== 0){?>

<div class="row">

<div class="col-sm-12">

                                <div class="panel panel-default">

                                    <div id="headingOne-<?php echo $i;?>" role="tab" class="panel-heading">

                                        <h4 class="panel-title">

                                            <a aria-controls="collapseOne-<?php echo $i;?>" aria-expanded="false" href="#collapseOne-<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">

                                                <div class="row">

                                                    <div class="col-sm-2 col-xs-2">

                                                        <div class="num">

                                                            <p><?php echo $i;?></p>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-8 col-xs-8">

                                                        <p><?php the_title(); ?></p>

                                                    </div>

                                                    <div class="col-sm-2 col-xs-2 text-right">

                                                        <i class="collapsed-indicator fa fa-plus"></i>

                                                    </div>

                                                </div>

                                            </a>

                                        </h4>

                                    </div>

                                    <div aria-labelledby="headingOne-<?php echo $i;?>" role="tabpanel" class="panel-collapse collapse" id="collapseOne-<?php echo $i;?>" aria-expanded="false" style="height: 0px;">

                                        <div class="panel-body">

                                           <?php the_content(); ?>

                                        </div>

                                    </div>

                                </div>

</div>

</div>



<?php } 

$i++;

}wp_reset_query();



}

function FAQseven() {

    global $post;

    $i=1;

$incr = have_posts();

    $args = array('posts_per_page' => 6,'suppress_filters' => true,'post_type' => 'faqs','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

<?php if($i % 2  == 0){?>

<div class="row">

<div class="col-sm-12">

                                <div class="panel panel-default">

                                    <div id="headingOne-<?php echo $i;?>" role="tab" class="panel-heading">

                                        <h4 class="panel-title">

                                            <a aria-controls="collapseOne-<?php echo $i;?>" aria-expanded="false" href="#collapseOne-<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">

                                                <div class="row">

                                                    <div class="col-sm-2 col-xs-2">

                                                        <div class="num">

                                                            <p><?php echo $i;?></p>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-8 col-xs-8">

                                                        <p><?php the_title(); ?></p>

                                                    </div>

                                                    <div class="col-sm-2 col-xs-2 text-right">

                                                        <i class="collapsed-indicator fa fa-plus"></i>

                                                    </div>

                                                </div>

                                            </a>

                                        </h4>

                                    </div>

                                    <div aria-labelledby="headingOne-<?php echo $i;?>" role="tabpanel" class="panel-collapse collapse" id="collapseOne-<?php echo $i;?>" aria-expanded="false" style="height: 0px;">

                                        <div class="panel-body">

                                           <?php the_content(); ?>

                                        </div>

                                    </div>

                                </div>

</div>

</div>



<?php } 

$i++;

}wp_reset_query();



}



function top_caro() {

    global $post;

    $i=1;

$incr = have_posts();

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'topcarosule','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

  <div class="slide list-inline nav-justified text-center"><div class="film-box"><h3><?php the_title();?></h3><?php the_content(); ?></div></div>

<?php

$i++;

}wp_reset_query();

?>

<?php

}

function news_car() {

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'thenews','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);   

?>

   <?php if ($key %5 ==0 ) {?>

    <div class="item <?php if($key == 0){?> active<?php }?>">

<ul class="list-inline"><?php } ?>

    <li>    

    <?php the_post_thumbnail('bott-caro',array('class' => "img-responsive")); ?>    

    </li><?php if ($key %5 ==4  ) { ?>

</ul>

</div>

<?php } ?>

<?php

}

}



function testnews_car() {

global $post;   

$i = 1;

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'thenews','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    $count = count($myposts);

    $active = 0;

    for( $i = 0; $i <= $count; $i+=6 ){

?>



<div class="item <?php if($active == 0){?> active<?php } $active++; ?>">

    <div class="client-list">

        <ul class="list-inline">

  <?php for( $j = $i; $j < $i + 6; $j++ ){

            $posts = $myposts[$j];

            if( $myposts[$j] != '' ){

            $post = get_post($posts->ID);

            setup_postdata( $post );  

    ?>    

            <li><?php the_post_thumbnail('bott-caro',array('class' => "img-responsive")); ?></li>

<?php }



}?>

        </ul>

    </div>

</div>



<?php

$i++;

}

}

function Breakingnews() {   

global $post;   

$i = 1;

    

    $args = array('suppress_filters' => true,'post_type' => 'breakingnews','posts_per_page' => '1','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $post ) { setup_postdata($post);

?>

<div class="news-content">

<br/>

<div class="row">

<div class="col-sm-2 text-center">

<?php the_post_thumbnail('breaking',array('class' => "img-responsive center-block")); ?>

</div>

<div class="col-sm-10">

<div class="breabold"><?php the_content(); ?> </div>

</div>

</div>

</div>

<?php

    }wp_reset_query();

?>

<?php

}

function featureditem() {
global $post;   
$i = 1;
    $args = array('numberposts' => -1,'suppress_filters' => true,'posts_per_page'=>'2','post_type' => 'featuredpro','featured_category' => 'Planet X','order' => 'ASC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) { setup_postdata($post);
?>
<div class="col-sm-6">
<div class="overlay">
<h5><span>Planet X</span>: <?php the_title();?></h5>
    <?php the_content(); ?>
<h6><span>Compares:</span> <?php the_field( "compares" );?></h6>
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
<br />
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
<div class="share-box text-center">
<ul class="list-inline">
    <li><p><?php the_field( "jeba1" );?></p></li>
    <li><a href="<?php the_field( "jeba2" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-2.png" alt="share" /></a></li>
    <li><a href="<?php the_field( "jeba3" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-3.png" alt="share" /></a></li>
    <li><a href="<?php the_field( "jeba4" );?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/social-banner-4.png" alt="share" /></a></li>
</ul>
</div>
</div>
<br />
</div>
<?php
    }wp_reset_query();
}



function how_it() {



global $post;   

$i = 1;

    $args = array('numberposts' => -1,'how_it_works' => 'Film','suppress_filters' => true,'post_type' => 'how_it','order' => 'ASC','orderby' => 'ID'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);

?>

<div class="slide">

<div class="how-box text-center">

  <a href=""><?php the_post_thumbnail('h_org',array('class' => "img-responsive center-block")); ?></a>

  <h2><?php the_title(); ?></h2>

  <?php the_content(); ?>

</div>    

</div>



<?php

    }

    wp_reset_query();

?>



<?php

}

function how_it_inves() {       



global $post;   

$i = 1;

    $args = array('numberposts' => -1,'how_it_works' => 'Investors','suppress_filters' => true,'post_type' => 'how_it','order' => 'ASC','orderby' => 'ID'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);

?>

<div class="slide">

<div class="how-box text-center">

  <a href=""><?php the_post_thumbnail('h_org',array('class' => "img-responsive center-block")); ?></a>

  <h2><?php the_title(); ?></h2>

  <?php the_content(); ?>

</div>    

</div>



<?php

    }

    wp_reset_query();

?>



<?php

}



function trailers_clips() {     

global $post;

$i=1;

?>





<div class="all-tc t-show">

<div class="custm-gall">

<ul>

<?php

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'trailers','trailers_category' => 'all','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);   

?>





<li>

<a href="#targetlink-<?php echo $i;?>" data-toggle="modal" data-target="#targetlink-<?php echo $i;?>"><?php the_post_thumbnail('trailer',array('class' => "img-responsive center-block")); ?></a>

</li>

                    <div class="modal fade" id="targetlink-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-body text-center">

                                    <?php the_content();?>

                                 </div>

                            </div>

                        </div>

                    </div>

<?php

$i++;   }wp_reset_query();

?>

</ul>

</div>

</div>



<?php

}



function trailers_clips1() {        

global $post;

$i=1;

?>





<div class="trail">

<div class="custm-gall">

<ul>

<?php

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'trailers','trailers_category' => 'clips','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);   

?>





<li>

<a href="#targetlinkt-<?php echo $i;?>" data-toggle="modal" data-target="#targetlinkt-<?php echo $i;?>"><?php the_post_thumbnail('trailer',array('class' => "img-responsive center-block")); ?></a>

</li>

                    <div class="modal fade" id="targetlinkt-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-body text-center">

                                    <?php the_content();?>

                                 </div>

                            </div>

                        </div>

                    </div>

<?php

$i++;   }wp_reset_query();

?>

</ul>

</div>

</div>



<?php

}



function trailers_clips2() {        

global $post;

$i=1;

?>





<div class="clipst">

<div class="custm-gall">

<ul>

<?php

    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'trailers','trailers_category' => 'trailers','order' => 'ASC'

    );

    $myposts = get_posts( $args );

    foreach( $myposts as $key => $post ) { setup_postdata($post);   

?>





<li>

<a href="#targetlinkc-<?php echo $i;?>" data-toggle="modal" data-target="#targetlinkc-<?php echo $i;?>"><?php the_post_thumbnail('trailer',array('class' => "img-responsive center-block")); ?></a>

</li>

                    <div class="modal fade" id="targetlinkc-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-body text-center">

                                    <?php the_content();?>

                                 </div>

                            </div>

                        </div>

                    </div>

<?php

$i++;   }wp_reset_query();

?>



</ul>

</div>

</div>





<?php

}



/*Film Maker Role*/

add_shortcode( 'filmreg' , 'filmreg' );

function filmreg(){ include 'filmmakers-reg.php';}

add_role('film_makers', 'Film Makers', array(

'read' => true, 

'edit_posts' => true,

'delete_posts' => true,

'view_posts' => true,

));

/*Investor Role*/

add_role('investors','Investors', array(

'read' => false, 

'edit_posts' => false,

'delete_posts' => false,

'view_posts' => true,

));

function app_output_buffer() {

    ob_start();

}

add_action('init', 'app_output_buffer');

function redirect_to_front_page() {
global $redirect_to;
if (!isset($_GET['redirect_to'])) {
$redirect_to = get_option('//moviefund.com/profile/');
}
}
add_action('login_form', 'redirect_to_front_page');




// add getting data from database on registration
function send_contact() {
    if ($_POST) {
        $to = "franz@asteriainteractive.com";
        $subject = "Message from Moviefund.com";
        $message = "Name: " . $_POST['contactName'] . "\r\n" .
            "Email: " . $_POST['email'] . "\r\n" .
            "Subject: " . $_POST['subject'] . "\r\n" .
            "Message: " . $_POST['message'] . "\r\n";
        $additional_headers = 'From: info@moviefund.com' . "\r\n" .
            'Reply-To: info@moviefund.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $additional_parameters = "-info@moviefund.com";

        $nonce_verified = wp_verify_nonce($_POST['_wpnonce']);
        if ($nonce_verified) {
            $sent = mail( $to, $subject, $message, $additional_headers, $additional_parameters);
            if ($sent==true)
                echo "Sent!";
        } else {
            echo "Not sent!";
        }
    } else {
        echo "";
        header("Location: /contact-us/?success=1");
    }
}

function runners_rant_callback() {
    echo "Success!";
    die();
}
add_action('wp_ajax_nopriv_runners_rant', 'runners_rant_callback');

