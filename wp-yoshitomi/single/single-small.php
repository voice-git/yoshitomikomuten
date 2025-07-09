<?php get_header(); ?>

<article class="single_section">
<div class="container fadebox animated">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="single_title">
<h2><?php the_title(); ?></h2>
</div>
<!-- page_title -->
<?php if( get_field('detail') ) { ?>
<p class="detail">
<?php the_field('detail'); ?>
</p>
<?php } ?>

<div class="single_content img-small">
<?php the_content(); ?>
</div>
<!-- single_content -->

<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- container -->
</article>

<?php get_footer(); ?>
