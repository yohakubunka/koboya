<?php get_header(); ?>
<?php get_template_part( 'breadcrumb-list' ); ?>
<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<main id="index">

  <?php get_template_part( 'template-parts/index-news' ); ?>
  <?php get_template_part( 'template-parts/index-adout' ); ?>

  <section class="section bottom">
    <div class="section-inner">
      <div class="pickup">
        <h2 class="title vertical-bottom"><span>P</span>ick Up</h2>
        <ul class="pickup-list">
          <li>
            <div class="pick-img">
              <img src="<?php echo get_template_directory_uri() ?>/images/index/index-fruit.png">
            </div>
            <h3 class="center">フルーツ<span>Fruits</span></h3>
            <div class="pick-inner">
              <p class="center">全国の篤農家が丹精込めて育て上げたフルーツを厳選してお届けします。</p>
            </div>
            <div class="page-link flex-centner">
              <div class="page-link__btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup"><p>More</p></a>
              </div>
            </div>
          </li>
          <li>
            <div class="pick-img">
              <img src="<?php echo get_template_directory_uri() ?>/images/index/index-deliful.png">
            </div>
            <h3 class="center">デリフル<span>Delicatessen Fruits</span></h3>
            <div class="pick-inner">
              <p class="center">フルーツ本来の美味しさを生かしたもぎたて完熟のオリジナルスウィーツ</p>
            </div>
            <div class="page-link flex-centner">
              <div class="page-link__btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup"><p>More</p></a>
              </div>
            </div>
          </li>
          <li>
            <div class="pick-img">
              <img src="<?php echo get_template_directory_uri() ?>/images/index/index-gift.png">
            </div>
            <h3 class="center">ギフト<span>Gift</span></h3>
            <div class="pick-inner">
              <p class="center">お客様の好みに合わせた季節感あふれる一流のフルーツをご提案致します。</p>
            </div>
            <div class="page-link flex-centner">
              <div class="page-link__btn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>pickup"><p>More</p></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section back-half">
    <div class="section-inner">
      <div class="topfarms">
        <div class="title-box">
          <h2 class="title center"><span>F</span>arms Interview</h2>
          <p class="center">
            作物には作った人の人柄が出ます。日本のフルーツのクオリティは世界一。<br>
            その根拠の一端をお届けします。
          </p>
        </div>
        <!-- 記事を投稿後に公開する。 -->
        <!-- <?php
        $query = new WP_Query(
          array(
            'post_type' => 'farm',
            'posts_per_page' => 5
          )
        );
        ?>
        <?php $i = 1 ?>
        <?php if ( $query->have_posts() ) : ?>
        <ul class="topfarms-list">
          <?php while ( $query->have_posts() ) : $query->the_post();?>
            <li class="topfarms-list__pic">
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="topfarms-image"><?php the_post_thumbnail(); ?></div>
                <?php endif; ?>
                <p class="topfarms-title">
                  <span>#</span><?= $i ?></span> <?php the_title(); ?>
                </p>
                <p class="topfarms-product">
                  <?php the_field('product_1'); ?>/<?php the_field('product_4'); ?>
                </p>
              </a>
            </li>
            <?php $i++ ?>
          <?php endwhile; ?>
        </ul>
      <?php endif; wp_reset_postdata(); ?> -->
      <!-- 記事が出来るまでは準備中 -->
      <ul class="reserve-box">
        <li>
          <a class="alert－btn">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/reserve.png">
          </a>
        </li>
        <li>
          <a class="alert－btn">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/reserve.png">
          </a>
        </li>
        <li>
          <a class="alert－btn">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/reserve.png">
          </a>
        </li>
      </ul>
      <div class="page-link flex-centner">
        <div class="page-link__btn">
          <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>farm"><p>More</p></a> -->
          <a class="alert－btn"><p>More</p></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/index-shoplist' ); ?>
<?php get_template_part( 'template-parts/index-subscrive' ); ?>

</main>
<?php get_footer(); ?>
<!-- slick slider -->
<!-- <div class="fwContainer-fluid">a</div>
<div class="fwContainer">
<div class="dFlex">
<div class="bgColor-primary Col-md-6 Col-3">left</div>
<div class="bgColor-dark Col-md-6 Col-4">righr</div>
<div class="bgColor-warning Col-md-6 Col-5">warning</div>
</div>
</div>
<p></p> -->
