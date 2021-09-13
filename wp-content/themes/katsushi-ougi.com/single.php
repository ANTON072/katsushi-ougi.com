<?php get_header(); ?>

<main>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>

      <article id="post_<?php the_ID(); ?>" <?php post_class('p-article'); ?>>
        <div class="p-articleHead">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="p-articleHead__meta u-text-link">
            <time><?php the_time('Y年m月d日'); ?></time>
            <div>
              <?php the_tags(); ?>
            </div>
          </div>
        </div>

        <div class="p-articleBody u-text-link">
          <?php the_content(); ?>
        </div>

        <nav class="p-articleNav u-text-link">
          <div><?php previous_post_link( '%link', '&laquo; PREV' ); ?></div>
          <div><?php next_post_link( '%link', 'NEXT &raquo;' ); ?></div>
        </nav>

      </article>

  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>