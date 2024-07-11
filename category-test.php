<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('breadcrumb-list'); ?>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-9">
      <!-- main START --------------------------------------------------------------------------->
      <p><?php single_cat_title(); ?>カテゴリー記事の一覧です</p>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <p><?php the_category(', '); ?></p>
          <p><?php the_content('Read more'); ?></p>

      <?php endwhile;
      endif; ?>

      <?php previous_posts_link('新しい投稿ページへ'); ?>
      <?php next_posts_link('古い投稿ページへ'); ?>
    </div><!-- main END --------------------------------------------------------------------------->
  </div>
</div>
<?php get_footer(); ?>