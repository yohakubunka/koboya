<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<main id="companies-contact">
  <section class="section">
    <div class="section-inner">
      <div class="contact">
      <h3 class="contact__title">For Companies Contact</h3>
        <div class="contact__text">
          <p>弘法屋では、様々なご要望にお応えするため、大量購入にも対応させていただきます。<br>お客様のご希望の商品と量を、問い合わせ内容欄にご記入ください。後日お見積りと納期のご連絡をさせていただきます。</p>
          <ul>
          <p>記入例：</p>
            <li>ピオーネ・・・2㎏</li>
            <li>サンふじ・・・3㎏</li>
            <li>愛媛みかん・・・10kg　etc.</li>
          </ul>
          <p>お好みの詰め合わせもご対応できますので、お気軽にお問い合わせください。</p>
          <p class="note">※お支払いについて</p>
          <p class="space">原則銀行振込でのご対応とさせていただきます。</p>
          <p class="space">ご入金が確認でき次第、商品の手配をさせていただきます。</p>
          <p>担当者より2〜3営業日以内にメールでご連絡させていただきます。<br>万が一ご連絡のメールが届かない場合は、お手数ですが <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $theme_options['op_3']); ?>"><?php echo $theme_options['op_3']; ?></a>までご連絡をお願いします。</p>
        </div>
        <div class="form">
        <?php echo do_shortcode( '[contact-form-7 id="146" title="ECサイト企業用お問い合わせ"]' ); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
