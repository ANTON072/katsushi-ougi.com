<?php get_header(); ?>

<main>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>

    aaa

  <?php
    endwhile;
  endif;
  ?>

</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>