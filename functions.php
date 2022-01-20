<?php 


/* enqueue scripts and style from parent theme */
    

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'media-query', get_stylesheet_directory_uri() . '/assets/css/Responsive.css');
    wp_enqueue_script( 'parent-jquery', get_template_directory_uri().'/js/jquery/jquery-migrate.min.js',array( 'jquery' ), false, true );
    wp_enqueue_script( 'parent-style', get_stylesheet_directory_uri().'/assets/js/custom.js' );

}



function footer_custom_widget(){

    register_sidebar( array(
        'name' => 'Footer widget 1',
        'id' => 'footer-widget-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );

    register_sidebar( array(
        'name' => 'Footer widget 2',
        'id' => 'footer-widget-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer widget 3',
            'id' => 'footer-widget-3',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );

            register_sidebar( array(
                'name' => 'Footer widget 4',
                'id' => 'footer-widget-4',
                'description' => 'Appears in the footer area',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
                ) );

                register_sidebar( array(
                    'name' => 'Footer widget 5',
                    'id' => 'footer-widget-5',
                    'description' => 'Appears in the footer area',
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget' => '</aside>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>',
                    ) );
                    register_sidebar( array(
                        'name' => 'Footer widget 6',
                        'id' => 'footer-widget-6',
                        'description' => 'Appears in the footer area',
                        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                        'after_widget' => '</aside>',
                        'before_title' => '<h3 class="widget-title">',
                        'after_title' => '</h3>',
                        ) );
}

add_action('widgets_init','footer_custom_widget');

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'article',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'articles' ),
                'singular_name' => __( 'article' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'articles'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


// create shortcode for acf form 
add_shortcode( 'post_article', 'article_posting' );
function article_posting() {
    $output;
    acf_form_head();
    get_header();

    $output.='<div id="content">';
	
		acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
        '_thumbnail_id'=>true,
		    'new_post'		=> array(
			'post_type'		=> 'article',
			'post_status'	=> 'publish'
		)
	));
    $output.='</div>';	
	
    return $output;
}








