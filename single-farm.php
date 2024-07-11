<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php
// ナンバリング取得
$this_post_id = get_the_ID();
$this_numbering = 0;
$the_query = new WP_Query( array(
  'post_type' => 'farm',
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => -1, // 表示件数
  'orderby'     => 'date',
  'order' => 'DESC'
) );

$index = 1;
if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post();

$query_index = get_the_ID();
if ($this_post_id == $query_index) {
  $this_numbering = $index;
}
$index++;

endwhile;endif;;wp_reset_postdata();
?>
<main id="farm-single">
  <section class="section">
    <div class="section-inner">
      <div class="single">
        <div class="single-profile">
          <div class="single-profile__img">
            <img src="<?php the_field('profile_0'); ?>">
          </div>
          <div class="single-profile__text">
            <div class="item">
              <span>#<?= $this_numbering ?></span>
              <?php the_field('profile_1'); ?>
            </div>
            <div class="from">
              <span><?php the_field('profile_2'); ?></span>
              <?php the_field('profile_3'); ?>
            </div>
            <div class="career"><?php the_field('profile_4'); ?></div>
          </div>
        </div>
        <div class="single-query">
          <div class="single-query__contents">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
          <div class="single-query__inner">
            <?php $i = 0 ?>
            <?php while ($i < 3) : ?>
              <?php
              $field_query = 'query_' . $i;
              $field_answer = 'answer_' . $i;
              $field_pot = 'interviewpot_' . $i;
              ?>
              <div class="box">
                <?php if (get_field($field_query)): ?>
                  <h2 class="box__title"><?php the_field($field_query) ?></h2>
                <?php endif; ?>
                <?php if (get_field($field_answer)): ?>
                  <div class="box__text"><?php the_field($field_answer) ?></div>
                <?php endif; ?>
                <?php if (get_field($field_pot)): ?>
                  <img src="<?php the_field($field_pot) ?>" class="box__img">
                <?php endif; ?>
              </div>
              <?php $i++; ?>
            <?php endwhile ?>
          </div>
        </div>
        <div class="single-item">

          <div class="single-item__img">
            <img src="<?php the_field('product_0'); ?>">
          </div>
          <div class="single-item__inner">
            <h3><?php the_field('product_1'); ?></h3>
            <p><?php the_field('product_2'); ?></p>
            <div class="page-link eclink">
              <?php
              $url = get_field('product_3');
              ?>
              <?php if (isset($url)): ?>
                <?php if ($url != ""): ?>
                  <div class="page-link__btn test">
                    <a href="<?= $url ?>" target="_blank">
                      <p>購入ページへ</p>
                    </a>
                  </div>
                <?php endif; ?>
              <?php else: ?>

              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
