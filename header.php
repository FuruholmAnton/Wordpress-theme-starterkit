<?php
/**
 * The template for displaying the header
 *
 */

  include 'config.php';

?><!doctype html>
<html amp lang="en" class="">
  <head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Anton Furuholm">

    <meta name="twitter:card" content="summary">

    <meta property="og:title" content="">

  </head>
  <body class="page-<?php echo get_body_class()[0] ?>">
    <main class="page-wrapper">
    <script>
      if ("pointer-events" in document.body.style) {
        document.documentElement.classList.add("has-pointerEvents");
      }
      if (!(localStorage.visted_before === "true")) {
        setTimeout(function() {
          if(window.scrollY < 50) {
            document.documentElement.classList.add("is-firstVisit");
          }
        }, 3000);
        localStorage.visted_before = "true";
      }
    </script>
