<?php
if (is_page('front-page-config')) {
  $top_url = home_url();
  header("Location:" . $top_url, true, 301); //301
  //header("Location:" . $top_url );  //302
  exit;
}
?>
<?php get_header(); ?>
<?php get_footer(); ?>
