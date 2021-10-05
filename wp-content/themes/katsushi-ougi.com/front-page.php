<?php get_header(); ?>

<?php ?>
<main>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>
  <?php get_template_part( 'partials/article-loop' ) ?>
  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>