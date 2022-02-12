<?php
//Exclude pages from Search
// if (!is_admin()) {
//     function fido_search_filter($query) {
//         if ($query->is_search) {
//         $query->set('post_type');
//         }
//         return $query;
//     }
//     add_filter('pre_get_posts','fido_search_filter');
// }

add_filter('register_post_type_args', function($args, $post_type) {
    if (!is_admin() && $post_type == 'page') {
    $args['exclude_from_search'] = true;
    }
    return $args;
}, 10, 2);