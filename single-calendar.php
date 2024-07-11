<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<form method="post">
   <select name="yourChoice">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
   </select>
   <select name="yourChoice2">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
   </select>
   <input type="submit">
</form>
<div class="tempSingle fwContainerFluid">
  <div class="dFlex noWrap contentLeft">

    <div class="toggleBtn dNone dBlock-md">
      <svg class="ham ham6" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
        <path
        class="line top"
        d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
        <path
        class="line middle"
        d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
        <path
        class="line bottom"
        d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
      </svg>
    </div>

    <div class="sidebar dNone-md toggleNav">
      <?php get_template_part( 'template-parts/sidebar' ); ?>
    </div>

    <div class="content">
      <div class="contentInner">
        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <h1><?php the_title() ?></h1>
        <p>最終更新日<time><?php echo get_the_modified_date("Y.m.d") ?></time></p>

        <?php get_template_part( 'template-parts/sns' ); ?>

        <div class="parentContent">
          <?php the_content() ?>
        </div>

        <!-- ===================== 子投稿があった場合 ============================ -->
        <?php
        $parent_id = get_the_ID();
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'post',
          'order' => 'ASC',
          'post_parent' => $parent_id,
        );
        $common_pages = new WP_Query( $args );
        ?>

        <?php if ($common_pages->have_posts()): ?>
          <!-- ===================== 子投稿目次 ============================ -->
          <ol class="childIndex mY3">
            <?php $index_cnt = 1 ?>
            <?php while( $common_pages->have_posts() ): $common_pages->the_post(); ?>
              <li><a href="#child<?php echo $index_cnt ?>"><?php echo $index_cnt ?>.<?php the_title() ?></a></li>
              <?php $index_cnt++ ?>
            <?php endwhile; ?>
          </ol>
          <!-- ===================== 子投稿目次 ============================ -->
          <!-- ===================== 子投稿内容 ============================ -->
          <div class="childs">
            <?php $index_cnt = 1 ?>
            <?php while( $common_pages->have_posts() ): $common_pages->the_post(); ?>
              <div class="mY10">
                <h2 id="child<?php echo $index_cnt ?>"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                <p>最終更新日<time><?php echo get_the_modified_date("Y.m.d") ?></time></p>
                <div class="childContent">
                  <?php the_content() ?>
                </div>
                <!-- ===================== 孫投稿リンク ============================ -->
                <?php
                $grandchild_id = get_the_ID();
                $grandchild_args = array(
                  'posts_per_page' => 5,
                  'post_type' => 'post',
                  'order' => 'ASC',
                  'post_parent' => $grandchild_id,
                );
                $grandchild_pages = new WP_Query( $grandchild_args );
                ?>
                <?php if ($grandchild_pages->have_posts()): ?>
                  <ul class="grandchild">
                    <li>関連記事</li>
                    <?php while( $grandchild_pages->have_posts() ): $grandchild_pages->the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
                  <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                <!-- ===================== 孫投稿リンク ============================ -->
              </div>
              <?php $index_cnt++ ?>
            <?php endwhile; ?>
          </div>
          <!-- ===================== 子投稿内容 ============================ -->
        <?php endif; ?>
        <!-- ===================== 子投稿があった場合 ============================ -->

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
