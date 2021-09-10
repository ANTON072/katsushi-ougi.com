<?php get_header(); ?>

<main>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
      <article>
        <div class="p-articleHead -page">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

        <div class="p-articleBody">
          <?php the_content(); ?>
        </div>
      </article>

  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>