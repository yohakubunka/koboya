

<?php wp_footer(); ?>
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-inner__logo">
      <img src="<?php echo get_template_directory_uri() ?>/svg/common/footer-logo.svg">
    </div>
    <div class="footer-inner__sns">
      <a href="https://www.facebook.com/koboya.co.jp/" target="_block"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/koboya_fruit/?utm_source=ig_embed/" target="_block"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <div class="copyright"><p>Copyright 2021 KOBOYA.All Rights Reserved.</p></div>
</footer>
<?php
global $theme_debug_mode;
if ($theme_debug_mode) {
  get_template_part( 'debug/config-data' );
}
?>

<style>
html {
  margin-top: 0!important;
}
</style>
</body>
</html>
