<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<main id="farm">
  <section class="section">
    <div class="section-inner">
      <div class="farms">
        <div class="farms-title">
          <h2>Fruit Farmers</h2>
          <p>作物には作った人の人柄が出ます。日本のフルーツのクオリティは世界一。<br>その根拠の一端をお届けします。</p>
        </div>

        <div class="farms-inner">
          <div class="farms-inner__list">
            <?php
            $max_paged_in_post = 9;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_type' => 'farm',
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => $max_paged_in_post, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
            ) );
            ?>
            <?php
            $i = 1;
            if ($paged != 1) {
              $i += $max_paged_in_post * ($paged - 1);
            }
            ?>
            <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <article class="article-farms">
                <div class="article-farms__img">
                  <a href="<?php the_permalink(); ?>?number=<?= $i ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="article-farms__title">
                  <a href="<?php the_permalink(); ?>?number=<?= $i ?>">
                    <p><span>#<?= $i ?></span> <?php the_title(); ?></p>
                  </a>
                </div>
                <div class="article-farms__category">
                  <p><?php the_field('product_1'); ?>/<?php the_field('product_4'); ?></p>
                </div>
              </article>
              <?php $i++ ?>
            <?php endwhile;endif;;wp_reset_postdata(); ?>
          </div>
          <!-- pagenation -->
          <div class="pagenation">
            <?php if ($the_query->max_num_pages > 1): ?><!-- ここからページネーション -->
              <?php echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $the_query->max_num_pages,
                'next_text' => 'Next',
                'prev_text' => 'Prev'
              )); ?>
            <?php endif; ?>
          </div>
          <!-- /pagenation -->
        </div>

      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
