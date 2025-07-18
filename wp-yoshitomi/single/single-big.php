<?php get_header(); ?>

<article class="single_section">
<div class="container fadebox animated">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="single_title">
<h2><?php the_title(); ?></h2>
</div>
<div class="etc_img">
	<?php the_content(); ?>
</div><br>
<!-- etc_img -->

<!-- page_title -->
<?php if( get_field('detail') ) { ?>
<p class="detail">
<?php the_field('detail'); ?>
</p>
<?php } ?>

<?php endwhile; ?>
<?php endif; ?>

</div>
<!-- container -->
</article>

<?php get_footer(); ?>
