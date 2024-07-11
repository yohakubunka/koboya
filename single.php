<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<main id="news-single">
  <section class="section">
    <div class="section-inner">
      <div class="single">
        <div class="single-date">
          <p class="single-date__time"><?php the_time('Y/m/d'); ?></p>
          <p class="single-date__category">
            <?php
            $category = get_the_category();
            if ( $category[0] ) {
              echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
            }
            ?>
          </p>
        </div>
        <div class="single-title"><?php the_title(); ?></div>
        <div class="single-contents">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="sab-menu">
        <div class="sab-menu__inner">
          <div class="previous-article">
            <?php previous_post_link('%link', '%title'); ?>
          </div>
          <div class="news-list">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>/news"><i class="fas fa-th"></i></a>
          </div>
          <div class="next-article">
            <?php next_post_link('%link', '%title'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
