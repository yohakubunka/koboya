<?php get_header(); ?>
<?php get_template_part('breadcrumb-list'); ?>
<main id="category">
  <section class="section">
    <div class="section-inner">

      <div class="news tab">
        <div class="tab-list">
          <div class="tab-list__btn">
            <a href="<?php echo home_url() ?>/news">
              <p>All</p>
            </a>
          </div>
          <div class="tab-list__btn--category boder">
            <p class="drop-btn">カテゴリー</p>
            <ul class="drop-list">
              <?php
              // 親カテゴリーのものだけを一覧で取得
              $args = array(
                'post-name' => 'news',
                'post_type' => 'post',
              );
              $categories = get_categories($args);
              ?>
              <?php foreach ($categories as $category) : ?>
                <li>
                  <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="tab-list__btn--archive">
            <p class="drop-btn">年別</p>
            <?php // 年別アーカイブリストを表示
            $year = NULL; // 年の初期化
            $args = array( // クエリの作成
              'post_type' => 'news', // 投稿タイプの指定
              'orderby' => 'date', // 日付順で表示
              'posts_per_page' => -1 // すべての投稿を表示
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) { // 投稿があれば表示
              echo '<ul class="year-list">';
              while ($the_query->have_posts()) : $the_query->the_post(); // ループの開始
                if ($year != get_the_date('Y')) { // 同じ年でなければ表示
                  $year = get_the_date('Y'); // 年の取得
                  echo '<li><a href="' . home_url('/', 'http') . 'news/' . $year . '">' . $year . '年</a></li>'; // 年別アーカイブリストの表示
                }
              endwhile; // ループの終了
              echo '</ul>';
              wp_reset_postdata(); // クエリのリセット
            }
            ?>
          </div>
        </div>
      </div>

      <div class="archive">
        <div class="archive-inner">
        </div>
      </div>

    </div>
  </section>
</main>
<?php get_footer(); ?>