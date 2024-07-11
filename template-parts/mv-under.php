<div class="main-visual">
  <div class="mv-under">
    <?php if ( is_page('about') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/about/about-us/about-mv.jpg">
      <h1 class="page-title">About Us<span>弘法屋について</span></h1>
    <?php elseif ( is_page('company') ) : ?>
      <div class="about-submv">
        <h1 class="page-title">Company<span>会社概要</span></h1>
      </div>
    <?php elseif ( is_page('concept') ) : ?>
      <div class="about-submv">
        <h1 class="page-title">Concept<span>コンセプト</span></h1>
      </div>
    <?php elseif ( is_page('story') ) : ?>
      <div class="about-submv">
        <h1 class="page-title">Story<span>『弘法屋』の由来</span></h1>
      </div>
    <?php elseif ( is_page('technology') ) : ?>
      <div class="about-submv">
        <h1 class="page-title">Technology<span>加工技術によるカットフルーツが評価</span></h1>
      </div>
    <?php elseif ( is_page('pickup') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pickup-mv.jpg">
      <h1 class="page-title">Pick Up<span>おすすめ</span></h1>
    <?php elseif ( is_page('news') || is_category() || is_date() ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/news/news-mv.jpg">
      <h1 class="page-title">News<span>新着情報</span></h1>
    <?php elseif ( is_page('contact') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/contact/contact-mv.jpg">
      <h1 class="page-title">Contact<span>お問い合わせ</span></h1>
    <?php elseif ( is_page('calendar') || is_tax('fruit_category') ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/fruits-calender/calender-mv.jpg">
      <h1 class="page-title">Fruits Calender<span>旬のフルーツ</span></h1>
    <?php elseif ( is_page('farm')  ) : ?>
      <img src="<?php echo get_template_directory_uri() ?>/images/farms-lnteview/farms-mv.jpg">
      <h1 class="page-title">Farms Inteview<span>農園紹介</span></h1>
    <?php endif; ?>
  </div>
</div>
