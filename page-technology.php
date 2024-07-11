<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<main id="technology">
  <section class="section">
    <div class="section-inner">
      <div class="award">
        <div class="award-box">
          <h3 class="award-box__title"><span class="left">“</span>フードアクション・ニッポン　アワード2014 入賞<span class="right">”</span></h3>
          <p>「フードアクション・ニッポン　アワード2014」の研究開発・新技術部門で<br>
            弊社デリフルの「化学処理でない有機的手法（酵素）による果実の剥皮技術」が、<br>
            安心安全で高品質であると認められ部門入賞しました。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section second-back">
      <div class="section-inner">
        <h2 class="inner-title">酵素剥皮の効果</h2>
        <div class="kouka">
          <ul>
            <li class="kouka-pic">
              <div class="kouka-pic__img">
                <img src="<?php echo get_template_directory_uri() ?>/images/about/technology/kouka_img_01.png">
              </div>
              <div class="kouka-pic__text">
                <h4>果肉細胞の損傷が少ない</h4>
                <p>酵素剥皮では、細胞を破断せず、細胞間の接着物質であるペクチンを分解する処理なので、細胞の損傷レベルは最小限であると考えられます。酵素剥皮の導入により、従来のナイフ剥皮よりも剥皮後の果実品質の劣化を抑えられます。</p>
              </div>
            </li>
            <li class="kouka-pic">
              <div class="kouka-pic__img">
                <img src="<?php echo get_template_directory_uri() ?>/images/about/technology/kouka_img_02.png">
              </div>
              <div class="kouka-pic__text">
                <h4>低温処理で香りを維持</h4>
                <p>果実の魅力の一つである新鮮な香りには、加熱や加温で変性しやすいという弱点があります。時間をかけて低温で処理することで、香りを維持した加工が可能です。</p>
              </div>
            </li>
            <li class="kouka-pic">
              <div class="kouka-pic__img">
                <img src="<?php echo get_template_directory_uri() ?>/images/about/technology/kouka_img_03.png">
              </div>
              <div class="kouka-pic__text">
                <h4>剥皮後の表面が滑らか</h4>
                <p>刃物による剥皮では表面が角張った外観になりますが、酵素剥皮では表面が滑らかな外観の果肉に仕上げることが可能です。このため、丸ごとの形状を残せるのも特徴の一つであり、加工用途が広がります。</p>
              </div>
            </li>
          </ul>
          <div class="kouka-quote">
            <p>文章引用元 : 農研機構 果樹研究所 酵素剥皮より</p>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/about-banner' ); ?>
  </main>
  <?php get_footer(); ?>
