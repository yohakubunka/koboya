<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<main id="contact">
  <section class="section">
    <div class="section-inner">
      <div class=" contact">
        <p>各種お問い合わせは以下のフォームでお願いいたします。<br class="pcbr">
          頂いたお問い合わせに関しましては後日改めてご連絡いたします。
        </p>
        <p>個人のお客様のご予約、店舗に関するご質問、お急ぎの方などは<br class="pcbr">
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $theme_options['op_3']); ?>" class="tel">
            <i class="fas fa-phone-alt"></i><?php echo $theme_options['op_10']; ?>
          </a>(タカシマヤ店)までご連絡をお願いいたします。
        </p>
        <?php echo do_shortcode( '[contact-form-7 id="6" title="公式サイトお問い合わせ"]' ); ?>
      </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
