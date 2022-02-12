<?php
function authenticate_custom_posts() {


    //Events
        register_post_type( 'event',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'event' )
            ),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-calendar',
            //'taxonomies'  => array( 'category' ),
        )
    );

    //Testimonials
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'testimonial' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-editor-quote',
            //'taxonomies'  => array( 'category' ),
        )
    );

    //Sponsors
    register_post_type( 'sponsor',
        array(
            'labels' => array(
                'name' => __( 'Sponsors' ),
                'singular_name' => __( 'sponsor' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-superhero-alt',
            //'taxonomies'  => array( 'category' ),
        )
    );


    //Speakers
    register_post_type( 'speaker',
        array(
            'labels' => array(
                'name' => __( 'Speakers' ),
                'singular_name' => __( 'speaker' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-groups',
            //'taxonomies'  => array( 'category' ),
        )
    );


    //Sessions
    register_post_type( 'session',
        array(
            'labels' => array(
                'name' => __( 'Sessions' ),
                'singular_name' => __( 'session' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-text-page',
            //'taxonomies'  => array( 'category' ),
        )
    );

    //Sessions
    register_post_type( 'content',
        array(
            'labels' => array(
                'name' => __( 'Contents' ),
                'singular_name' => __( 'content' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-text',
            //'taxonomies'  => array( 'category' ),
        )
    );


}

add_action( 'init','authenticate_custom_posts' );


//Sponsor Custom Taxonomy
function sponsor_custom_taxonomies() {
	$labels = array(
		'name' => 'Sponsor-Categories',
		'singular_name' => 'Sponsor-Category',
		'search_Sponsors_Categories' => 'Search Sponsor-Category',
		'all_Sponsors_Categories' => 'All Sponsor-Category',
		'parent_Sponsors_Category' => 'Parent Sponsor-Category',
		'parent_Sponsors_Category_colon' => 'Parent Sponsor-Category:',
		'edit_Sponsors_Category' => 'Edit Sponsor-Category',
		'update_Sponsors_Category' => 'Update Sponsor-Category',
		'add_new_Sponsors_Category' => 'Add New Sponsor-Category',
		'new_Sponsors_Category_name' => 'Sponsor-Category Name',
		'menu_name' => 'Sponsor-Categories',
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'Sponsor-Category' )
	);
	register_taxonomy( 'Sponsor-Category', array('sponsor'), $args );
}
add_action( 'init', 'sponsor_custom_taxonomies' );

//Speaker Custom Taxonomy
function speaker_custom_taxonomies() {
	$labels = array(
		'name' => 'Speaker-Categories',
		'singular_name' => 'Speaker-Category',
		'search_Speakers_Categories' => 'Search Speaker-Category',
		'all_Speakers_Categories' => 'All Speaker-Category',
		'parent_Speakers_Category' => 'Parent Speaker-Category',
		'parent_Speakers_Category_colon' => 'Parent Speaker-Category:',
		'edit_Speakers_Category' => 'Edit Speaker-Category',
		'update_Speakers_Category' => 'Update Speaker-Category',
		'add_new_Speakers_Category' => 'Add New Speaker-Category',
		'new_Speakers_Category_name' => 'Speaker-Category Name',
		'menu_name' => 'Speaker-Categories',
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'Speaker-Category' )
	);
	register_taxonomy( 'Speaker-Category', array('speaker'), $args );
}
add_action( 'init', 'speaker_custom_taxonomies' );

//Session Custom Taxonomy
function session_custom_taxonomies() {
    $labels = array(
        'name' => 'Session-Categories',
        'singular_name' => 'Session-Category',
        'search_Sessions_Categories' => 'Search Session-Category',
        'all_Sessions_Categories' => 'All Session-Category',
        'parent_Sessions_Category' => 'Parent Session-Category',
        'parent_Sessions_Category_colon' => 'Parent Session-Category:',
        'edit_Sessions_Category' => 'Edit Session-Category',
        'update_Sessions_Category' => 'Update Session-Category',
        'add_new_Sessions_Category' => 'Add New Session-Category',
        'new_Sessions_Category_name' => 'Session-Category Name',
        'menu_name' => 'Session-Categories',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Session-Category' )
    );
    register_taxonomy( 'Session-Category', array('session'), $args );
}
add_action( 'init', 'session_custom_taxonomies' );



//Contant Custom Taxonomy
function content_custom_taxonomies() {
    $labels = array(
        'name' => 'Content-Types',
        'singular_name' => 'Content-Type',
        'search_Contents_Types' => 'Search Content-Type',
        'all_Contents_Types' => 'All Content-Type',
        'parent_Contents_Type' => 'Parent Content-Type',
        'parent_Contents_Type_colon' => 'Parent Content-Type:',
        'edit_Contents_Type' => 'Edit Content-Type',
        'update_Contents_Type' => 'Update Content-Type',
        'add_new_Contents_Type' => 'Add New Content-Type',
        'new_Contents_Type_name' => 'Content-Type Name',
        'menu_name' => 'Content-Types',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Content-Type' )
    );
    register_taxonomy( 'Content-Type', array('content'), $args );
}
add_action( 'init', 'content_custom_taxonomies' );



// add post-formats to post_type 'Content'
add_theme_support( 'post-formats', array( 'standard', 'audio', 'video', 'image', 'gallery', 'link' ) );
add_post_type_support( 'content', 'post-formats' );
