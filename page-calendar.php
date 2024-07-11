<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<div class="modal">
  <div class="modal__back"></div>
  <div class="modal__inner">
    <button class="close-btn">
      <img src="<?php echo get_template_directory_uri() ?>/svg/fruits-calender/close.svg">
    </button>
    <ul>
      <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
          target="_blank"
          rel="nofollow noopener noreferrer">
          <i class="fab fa-facebook-f"></i>
          <p>Facebook</p>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/intent/tweet?
        url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"
        target="_blank"
        rel="nofollow noopener noreferrer">
        <i class="fab fa-twitter"></i>
        <p>Twitter</p>
      </a>
    </li>
    <li>
      <a href="https://line.me/R/msg/text/?<?php the_permalink(); ?>"
        target="_blank"
        rel="nofollow noopener noreferrer">
        <i class="fab fa-line"></i>
        <p>LINE</p>
      </a>
    </li>
    <li>
      <div class="copy-value" data-clipboard-text="<?php the_permalink(); ?>">
        <img src="<?php echo get_template_directory_uri() ?>/svg/fruits-calender/link.svg">
        <p>LinK</p>
      </div>
    </ul>
  </div>
</div>
<main id="calendar">
  <section class="section bottom">
    <div class="section-inner">
      <div class="calendar">
        <div class="calendar__text">
          <p>弘法屋で取り扱っているフルーツの旬が分かるカレンダーです。<br>
            ※天候・気候によって変更が生じますので、ご了承下さい。</p>
          </div>
          <div class="calendar__month">
            <ul class="calendar__month--list">
              <?php $terms = get_terms('fruit_category',
              array(
                'parent' => 0,
                'orderby' => 'description'
              )
              ); 
              ?>
              
              <?php foreach ($terms as $term): ?>
                <li><a href="<?= get_term_link($term); ?>"><p><?= $term->name ?></p></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="calendar__list">
            <ul class="calendar__list--article">
              <?php
              $args = array(
                'post_type' => 'calender',
                'posts_per_page' => -1,
                'orderby' => 'date',
              );
              $query = new WP_Query($args);
              ?>
              <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post();?>
                  <li class="article">
                    <div class="article__img">
                      <img src="<?php the_field('fruit_0'); ?>">
                    </div>
                    <div class="article__inner">
                      <h3 class="article__inner--title"><?php the_field('fruit_1'); ?></h3>
                      <div class="article__inner--type">
                        <p><span>【産地】</span><?php the_field('fruit_2'); ?></p>
                        <p><span>【時季】</span><?php the_field('fruit_3'); ?></p>
                        <p><span>【特徴】</span><?php the_field('fruit_4'); ?></p>
                      </div>
                      <div class="article__inner--share">
                        <button class="sharebtn">
                          <img src="<?php echo get_template_directory_uri() ?>/svg/fruits-calender/share_btn.svg">
                        </button>
                        <?php
                        $url = get_field('fruit_5');
                        ?>
                        <?php if (isset($url)): ?>
                          <?php if ($url != ""): ?>
                            <div class="buybtn">
                              <a href="<?= $url ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/svg/fruits-calender/buy_btn.svg">
                              </a>
                            </div>
                          <?php endif; ?>
                        <?php else: ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </li>
                <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/under-subscrive' ); ?>
  </main>
  <?php get_footer(); ?>
