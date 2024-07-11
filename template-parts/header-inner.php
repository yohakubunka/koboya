<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<div class="meun">
  <div class="meun-inner">
    <div class="meun-inner__logo">
      <img src="<?php echo get_template_directory_uri() ?>/svg/common/header-logo.svg">
    </div>
    <div class="meun-inner__box pc">
      <ul class="meunbar" id="global-menu">
        <li>
          <a class="remove-menu" href="<?php echo esc_url( home_url( '/' ) ); ?>">Top</a>
        </li>
        <li class="drop-meun">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>news">News</a>
        </li>
        <li class="drop-meun">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About Us</a>
        </li>
        <li class="drop-meun">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup">Pick Up</a>
        </li>
        <li>
        <a class="remove-menu alert－btn">Farms Interview</a>
        </li>
        <li>
          <a class="remove-menu" href="<?php echo esc_url( home_url( '/' ) ); ?>calendar">Fruits Calender</a>
        </li>
        <li>
          <a class="remove-menu" href="<?php echo esc_url( home_url( '/' ) ); ?>#shoplist">Shop List</a>
        </li>
      </ul>
      <div class="meun-btn">
        <ul>
          <li>
            <a class="remove-menu" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">
              <img src="<?php echo get_template_directory_uri() ?>/svg/common/header-mail.svg">
            </a>
          </li>
          <li>
            <a href="<?php online_url('online_link') ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/svg/common/header-cart.svg">
            </a>
          </li>
        </ul>
      </div>
      <div class="submeun" id="toggle-menu">
        <div class="subbox">
        </div>
        <div class="subbox news">
          <h4 class="title">News</h4>
          <ul class="list">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 4
            );
            $st_query = new WP_Query( $args );
            ?>
            <?php if ( $st_query->have_posts() ): ?>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="catch">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri() ?>/images/news/news_dummy.png">
                        <?php endif ; ?>
                    </div>
                    <div class="meun-news">
                      <div class="meun-news__top">
                        <p class="time"><?php echo get_the_date( "Y.m.d" ); ?></p>
                        <?php
                        $categories = get_the_category();
                        foreach ( $categories as $category ) {
                          echo '<p class="category">' . $category->name . '</p>';
                        }
                        ?>
                      </div>
                      <p class="meun-news__bottom"><?php the_title(); ?></p>
                    </div>
                  </a>
                <?php endwhile;?>
              <?php endif; ?>
            </li>
            <?php wp_reset_query(); ?>
          </ul>
        </div>
        <div class="subbox about">
          <h4 class="title">About Us</h4>
          <ul class="list">
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/concept" class="subabout">
                <div class="subabout-img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/about/about-us/concept-icon.png">
                </div>
                <div class="subabout-inner">
                  <h4 class="title">コンセプト</h4>
                  <p>弘法屋の大切にしていることや弘法屋の考え方を記載しています。</p>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/company" class="subabout">
                <div class="subabout-img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/about/about-us/company-icon.png">
                </div>
                <div class="subabout-inner">
                  <h4 class="title">会社概要</h4>
                  <p>弘法屋の会社の情報を記載しています。</p>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/technology" class="subabout">
                <div class="subabout-img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/about/about-us/technology-icon.png">
                </div>
                <div class="subabout-inner">
                  <h4 class="title">加工技術</h4>
                  <p>農研機構の持つ特許技術を使い、世界で初めて商品化致しました。</p>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/story" class="subabout">
                <div class="subabout-img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/about/about-us/story-icon.png">
                </div>
                <div class="subabout-inner">
                  <h4 class="title">『弘法屋』の由来</h4>
                  <p>弘法屋の歴史をわかりやすく表にまとめました。</p>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="subbox pick">
          <h4 class="title">Pick Us</h4>
          <ul class="list">
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup" class="box-pick">
                <div class="box-pick__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/meun-about-01.jpg">
                </div>
                <h4 class="title">フルーツ</h4>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup" class="box-pick">
                <div class="box-pick__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/meun-about-02.jpg">
                </div>
                <h4 class="title">デリフル</h4>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup" class="box-pick">
                <div class="box-pick__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/meun-about-03.jpg">
                </div>
                <h4 class="title">ギフト</h4>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="meun-inner__spmeun sp">

      <div class="meun-btn">
        <div class="meun-btn__line">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <p class="meun-btn__open">Menu</p>
        <p class="meun-btn__close">close</p>
      </div>

      <nav class="meun-inner">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Top</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news">News</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup">Pick Up</a></li>
          <li><a class="alert－btn">Farms Interview</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>calendar">Fruits Calender</a></li>
          <li><a href="#shoplist">Shop List</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
          <li class="online"><a href="<?php online_url('online_link') ?>" target="_blank">Online Shop</a></li>
        </ul>
        <div class="meun-inner__tel">
          <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $theme_options['op_3']); ?>" class="number">
            <p><i class="fas fa-phone-alt"></i><?php echo $theme_options['op_3']; ?></p>
          </a>
          <p>営業時間<?php echo $theme_options['op_11']; ?></p>
        </div>
      </nav>

    </div>
  </div>
</div>
