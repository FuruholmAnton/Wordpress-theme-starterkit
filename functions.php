<?php


$PATH_FUNCTIONS = strstr(get_template_directory_uri(), 'wp-content')."/functions/";

foreach (glob($PATH_FUNCTIONS.'*.php') as $filename) {
    include $filename;
}

/* WP functions
================================ */

// Excerpt word length
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



