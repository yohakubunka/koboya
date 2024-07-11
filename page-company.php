<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<main id="company">
  <section class="section">
    <div class="section-inner">
      <div class="company-list">
        <div class="company-list__left">
          <dl>
            <dt>会社名</dt>
            <dd><?php echo $theme_options['op_0']; ?></dd>
          </dl>
          <dl>
            <dt>代表者</dt>
            <dd><?php echo $theme_options['op_1']; ?></dd>
          </dl>
          <dl>
            <dt>事務所</dt>
            <dd><?php echo $theme_options['op_2']; ?></dd>
          </dl>
        </div>
        <div class="company-list__right">
          <dl>
            <dt>TEL</dt>
            <dd><?php echo $theme_options['op_3']; ?></dd>
          </dl>
          <dl>
            <dt>FAX</dt>
            <dd><?php echo $theme_options['op_4']; ?></dd>
          </dl>
          <dl>
            <dt>設立</dt>
            <dd><?php echo $theme_options['op_5']; ?></dd>
          </dl>
        </div>
      </div>
      <div class="othercompany-list">
        <div class="othercompany-list__right">
          <h3 class="commentary-title">店舗</h3>
          <dl>
            <dt>住所</dt>
            <dd><?php echo $theme_options['op_9']; ?></dd>
          </dl>
          <dl>
            <dt>TEL</dt>
            <dd><?php echo $theme_options['op_10']; ?></dd>
          </dl>
          <dl>
            <dt>FAX</dt>
            <dd><?php echo $theme_options['op_12']; ?></dd>
          </dl>
          <dl>
            <dt>E-mail</dt>
            <dd><?php echo $theme_options['op_13']; ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'template-parts/about-banner' ); ?>
</main>
<?php get_footer(); ?>
