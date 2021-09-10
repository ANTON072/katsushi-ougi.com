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
          <div class="p-articleHead__meta">
            <time><?php the_time('Y年m月d日'); ?></time>
            <div>
              <?php the_tags(); ?>
            </div>
          </div>
        </div>

        <div class="p-articleBody">
          <?php the_excerpt(); ?>
        </div>

        <div class="p-article__readMore u-text-link">
          <a href="<?php the_permalink(); ?>">read more &raquo;</a>
        </div>
      </article>

  <?php
    endwhile;
  endif;
  ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>