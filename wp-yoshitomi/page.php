<?php get_header(); ?>

<article class="page_section">
  <?php
  if (have_posts()) :
  while (have_posts()) :
  the_post();
  ?>

<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>

</article>
<!-- page_section -->

<?php get_footer(); ?>
