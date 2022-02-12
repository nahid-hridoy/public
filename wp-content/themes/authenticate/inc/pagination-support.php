<?php
// Pagination Start
// Numbered Pagination
if ( !function_exists( 'authblog_pagination' ) ) {
     
    function authblog_pagination( ) {
         
        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';
         
        global $wp_query, $authblog_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999;
 
        //before after query
        if ( $authblog_query ) {
            $total = $authblog_query->max_num_pages;
        } else {
            $total = $wp_query->max_num_pages;
        }
         
        if( $total > 1 )  {
             if( !$current_page = get_query_var('paged') )
                 $current_page = 1;
             if( get_option('permalink_structure') ) {
                 $format = 'page/%#%/';
             } else {
                 $format = '&paged=%#%';
             }
            echo paginate_links(array(
                'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'        => $format,
                'current'       => max( 1, get_query_var('paged') ),
                'total'         => $total,
                'mid_size'      => 3,
                'type'          => 'list',
                'prev_text'     => 'Prev',
                'next_text'     => 'Next',
             ) );
        }
    }
     
}


// function pre_get_posts_function($authblog_query) {
// $authblog_query->set("search_filter_id", 10558);
// }
// add_action( 'pre_get_posts', array($this, 'pre_get_posts_function') );