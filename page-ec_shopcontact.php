<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<main id="ec-shopcontact">
  <section class="section">
    <div class="section-inner">
      <div class="contact">
      <h3 class="contact__title">Contact</h3>
        <div class="contact__text">
          <p>担当者より2〜3営業日以内にメールでご連絡させていただきます。<br>万が一ご連絡のメールが届かない場合は、お手数ですが <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $theme_options['op_3']); ?>"><?php echo $theme_options['op_3']; ?></a>までご連絡をお願いします。</p>
        </div>
        <div class="form">
        <?php echo do_shortcode( '[contact-form-7 id="154" title="ECサイト商品用お問い合わせ"]' ); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

<script>
  $(function () {
    var product = GetQueryString();
    var product = product['product'];

    if(product) {
      $('#product-title').val(product);
    }
  });
</script>
