<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php  $theme_options = get_option( 'theme_option_name' ); ?>
<main id="pickup">
  <section class="section">
    <div class="section-inner">
      <div class="pick-up tab">
        <div class="tab-list">
          <div class="tab-list__btn active"><p>フルーツ</p></div>
          <div class="tab-list__btn"><p>デリフル</p></div>
          <div class="tab-list__btn"><p>ギフト</p></div>
        </div>
      </div>
    </div>

    <div class="pick-up tab">
      <div class="tab-inner">
        <div class="tab-inner__contents open">
          <h2 class="inner-title">真珠のように輝く、<br class="spbr">レッドパール</h2>
          <div class="pick-box">
            <div class="pick-box__inner">
              <div class="accordion">
                <h4 class="accordion-title stay"><span class="number">01</span>見た目の美しさ</h4>
                <div class="accordion-inner stay">
                  <p>その名の如く、まさに光り輝く大粒の真珠のような輝きを放ち、へたが反るように上を向いています。<br>選り抜いた粒以外を摘果するため、株の栄養を一身に受け、大きく美しく健康的な姿を形成します。形が美しく粒も大きいのが特徴です。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-fruit-img01.png">
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-title"><span class="number">02</span>芳醇な香り</div>
                <div class="accordion-inner">
                  <p>包装を解いた瞬間にその芳香の魅力に包まれ、いちごの完熟した香りの真髄を味わうことが出来ます。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-fruit-img02.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="pick-box__img fruit-img">
              <img class="strawberry" src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-fruit2.png">
              <div class="point">
                <span class="number start">01</span>
                <img src="<?php echo get_template_directory_uri() ?>/svg/pickup/pick-fruit-01.svg">
              </div>
              <div class="point">
                <img src="<?php echo get_template_directory_uri() ?>/svg/pickup/pick-fruit-02.svg">
                <span class="number">02</span>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-inner__contents">
          <h2 class="inner-title">スプーン１つで食べられる<br class="lgbr">もぎたての完熟スウィーツ<br>

          <div class="subtitle">
            <div class="subtitle__top">
              <div class="subtitle__top--text">
                『<div class="rub"><p>ＤＥＬＩ</p><span>デリ</span></div>－
                <div class="rub"><p>ＦＲＵＩＴ</p><span>フル</span></div>』＝</div>
            </div>
            <div class="subtitle__bottom">
              <p>ＤＬＥＬＩＣＡＴＥＳＳＥＮ＝ＦＲＵＩＴ</p>
              <p>（調理加工済み果物）</p>
            </div>
          </div>

          </h2>
          <div class="pick-box">
            <div class="pick-box__img derifuru-img">
              <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-derifuru.png" class="derifuru-pot">
              <div class="point">
                <img src="<?php echo get_template_directory_uri() ?>/svg/pickup/pick-derifuru-01.svg">
                <span class="number start">01</span>
              </div>
              <div class="point">
                <span class="number">02</span>
                <img src="<?php echo get_template_directory_uri() ?>/svg/pickup/pick-derifuru-02.svg">
              </div>
              <!-- <div class="point">
                <span class="number">03</span>
                <img src="<?php echo get_template_directory_uri() ?>/svg/pickup/pick-derifuru-03.svg">
              </div> -->
            </div>

            <div class="pick-box__inner">
              <div class="accordion">
                <h4 class="accordion-title stay"><span class="number">01</span>フルーツが主役のスウィーツ</h4>
                <div class="accordion-inner stay">
                  <p>品種・産地・食べ頃にこだわった専門店のフルーツをタップリ使用しています。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-derifuru-img01.png" >
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-title"><span class="number">02</span>ナチュラルプレーンババロア</div>
                <div class="accordion-inner">
                  <p>使用しているババロアは、完全手作りの弘法屋オリジナルレシピです。添加物はもちろん、水を一滴も使用しないフルーツを引き立てる優しい味に仕上げています。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-derifuru-img02.png">
                  </div>
                </div>
              </div>
              <!-- <div class="accordion">
                <div class="accordion-title"><span class="number">03</span>持ち運びに最適な容器</div>
                <div class="accordion-inner">
                  <p>大阪、東京などを往復される中、途中下車して買いに来てくださる方のため容器を開発。安定した容器で美味しさを保つことが可能となりました。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-derifuru-img03.png">
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>

        <div class="tab-inner__contents">
          <h2 class="inner-title">贅沢フルーツの<br class="spbr">豪華ギフト</h2>
          <div class="pick-box">
            <div class="pick-box__inner">
              <div class="accordion">
                <h4 class="accordion-title stay"><span class="number">01</span>好みに合わせたオリジナルギフト</h4>
                <div class="accordion-inner stay">
                  <p>店頭では、お客様と受け取られる方の様々なご要望にあわせて、オーダーメイドの組み合わせギフトをお作りしています。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-gift-img01.png" >
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-title"><span class="number">02</span>厳選フルーツ</div>
                <div class="accordion-inner">
                  <p>季節感とお客様のお好みに合わせた旬の味をおすすめしています。どちら様に贈られてもお喜びいただけるよう努めております。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-gift-img02.png">
                  </div>
                </div>
              </div>
              <div class="accordion">
                <div class="accordion-title"><span class="number">03</span>最適な包装</div>
                <div class="accordion-inner">
                  <p>のし・おしるし・メッセージカードをお客様のご要望に合わせてお選び・お付け致します。</p>
                  <div class="accordion-inner__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-gift-img03.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="pick-box__img gift-img">
              <img src="<?php echo get_template_directory_uri() ?>/images/pickup/pick-gift.png" class="gift-img">
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
</main>
<?php get_footer(); ?>
