<?php

function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

function baseurl(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

// define(ROOT, get_template_directory_uri());
$GLOBALS["ROOT"] = get_template_directory_uri();

$PATH_FUNCTIONS = strstr(get_template_directory_uri(), 'wp-content')."/functions/";

foreach (glob($PATH_FUNCTIONS.'*.php') as $filename) {
    include $filename;
}
