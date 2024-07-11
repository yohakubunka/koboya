<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<main id="category">
  <section class="section">
    <div class="section-inner">

      <div class="news tab">
        <div class="tab-list">
          <div class="tab-list__btn">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/news"><p>All</p></a>
          </div>
          <div class="tab-list__btn--category border">
            <p class="drop-btn">カテゴリー</p>
            <ul class="drop-list">
              <?php
              // 親カテゴリーのものだけを一覧で取得
              $args = array(
                'post-name' => 'news',
                'post_type' => 'post',
              );
              $categories = get_categories( $args );
              ?>
              <?php foreach( $categories as $category ) : ?>
                <li>
                  <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="tab-list__btn--archive">
            <?php
            $year_prev = null;
            $postType = 'post';
            $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
            YEAR( post_date ) AS year,
            COUNT( id ) as post_count FROM $wpdb->posts
            WHERE post_status = 'publish' and post_date <= now( )
            and post_type = '$postType'
            GROUP BY month , year
            ORDER BY post_date DESC");
            ?>
            <p class="drop-btn">年別</p>
            <ul class="drop-list">
              <?php foreach ($months as $key => $month): ?>
                <li>
                  <a href="<?php echo esc_url(home_url()); ?>/<?php echo $month->year; ?>"><?php echo $month->year; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="category">
        <div class="category-inner">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          global $post;
          $categories = get_the_category( $post->ID );
          $category_slug = $categories[0]->category_nicename;
          $args = array(
            'paged' => $paged,
            'post' => 'post',
            'category_name' => $category_slug,
            'posts_per_page' => 9,
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <article>
                <div class="article">
                <div class="article-img">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri() ?>/images/news/news_dummy.png">
                    <?php endif ; ?>
                  </a>
                </div>
                <div class="article-date">
                  <p class="article-date__time"><?php the_time('Y/m/d'); ?></p>
                  <p class="article-date__category">
                    <?php
                    $category = get_the_category();
                    if ( $category[0] ) {
                      echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                    }
                    ?>
                  </p>
                </div>
                <div class="article-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; wp_reset_postdata(); ?>
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
  </section>
</main>
<?php get_footer(); ?>
