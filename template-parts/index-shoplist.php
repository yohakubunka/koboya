<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<section class="section" id="shoplist">
  <div class="section-inner">
    <div class="shoplist">
      <h2 class="title vertical-bottom"><span>S</span>hop List</h2>
      <div class="shoplist-inner">
        <div class="shoplist-inner__slide">
          <ul class="shopslides">
            <li><img src="<?php echo get_template_directory_uri() ?>/images/index/index-gallery01.png"></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/images/index/index-gallery02.png"></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/images/index/index-gallery03.png"></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/images/index/index-gallery04.png"></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/images/index/index-gallery05.png"></li>
          </ul>
        </div>
        <div class="shoplist-inner__text">
          <h3>ジェイアール名古屋タカシマヤ店</h3>
          <div class="shop">
            <p class="shop-address">
              〒<?php echo $theme_options['op_8']; ?><br>
              <?php echo $theme_options['op_9']; ?>
            </p>
            <div class="shop-contact">
              <p class="shop-contact__tel">TEL <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $theme_options['op_10']); ?>"><?php echo $theme_options['op_10']; ?></a>
            </p>
              <p class="shop-contact__fax">FAX <?php echo $theme_options['op_12']; ?></p>
            </div>
            <p class="shop-time">営業時間　<?php echo $theme_options['op_11']; ?></p>
            <div class="shop-link">
              <div class="shop-link__map">
                <a href="https://goo.gl/maps/H9jTEiNrPTetCUjh8" target="_blank"><p>Google Map</p></a>
              </div>
              <div class="shop-link__pdf">
                <a href="##"><p>Shop Menu</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
