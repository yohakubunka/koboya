<section class="section bottom">
  <div class="section-inner">
    <h2 class="title center"><span>N</span>ews</h2>
    <div class="news">
      <ul class="news__list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        $st_query = new WP_Query( $args );
        ?>
        <?php if ( $st_query->have_posts() ): ?>
          <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="news-link">
                <div class="top-article">
                  <div class="top-article__time">
                    <p><?php echo get_the_date( "Y.m.d" ); ?></p>
                  </div>
                  <div class="top-article__category">
                    <?php
                    $categories = get_the_category();
                    foreach ( $categories as $category ) {
                      echo '<p>' . $category->name . '</p>';
                    }
                    ?>
                  </div>
                  <div class="top-article__title">
                    <?php the_title(); ?>
                  </div>
                </div>
              </a>
            <?php endwhile;?>
          <?php endif; ?>
        </li>
        <?php wp_reset_query(); ?>
      </ul>
      <div class="page-link flex-centner">
        <div class="page-link__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>news"><p>More</p></a>
        </div>
      </div>

    </div>
  </div>
</section>
