<!-- 使ってない -->
<?php get_header(); ?>
<div class="container">
    <div class="page_title fadebox animated">
        <?php dynamic_sidebar(1); ?>
    </div>
    <!-- page_title -->
    <section class="archives">

        <ul>
            <?php
            $args = array(
            'post_type' => 'post',
            'cat' => 5, 
            'order' => 'DESC',
            'posts_per_page' => 18,
            'paged' => get_query_var('paged'),            
            ); ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

            <li class=" fadebox animated">
            
                <div class="inr">
                    <a href="<?php the_permalink(); ?>">
                        <div class="thum">
                            <figure>
                                <?php the_post_thumbnail('thumbnail'); ?>
                                <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                            </figure>
                        </div>
                        <!-- thum -->
                    </a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>

        <?php
        the_posts_pagination(
            array(
            'prev_text'          => __('<'),
            'next_text'          => __('>'),
            ) 
        );
        ?>
        <?php wp_reset_postdata(); ?>
    </section>
    <!-- blog -->

</div>
<!-- container -->

<?php get_footer(); ?>