<?php
/*
Template Name: business
*/
?>

<?php get_header(); ?>

<div class="container">
    <section class="archives">
        <div class="archives_title fadebox animated">
            <h2>商業作品実績</h2>
        </div>
        <!-- archives_title -->
		<div class="archives_container">
		    <ul>
		        <?php
		        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		        $args = array(
		            'category_name'  => 'business',
		            'posts_per_page' => 18,
		            'paged'          => $paged,
		        );
		
		        $query = new WP_Query($args);
		
		        if ($query->have_posts()) :
		            while ($query->have_posts()) :
		                $query->the_post();
		                ?>
		                <li class="fadebox animated">
		                    <div class="inr">
		                        <div class="thum">
		                            <figure>
		                                <?php the_post_thumbnail('thumbnail'); ?>
		                            </figure>
		                        </div>
		                    </div>
		                    <p class="fadebox_business_cap"><?php the_title(); ?></p>
		                </li>
		                <?php
		            endwhile;
		        endif;
		
		        wp_reset_postdata();
		        ?>
		    </ul>
		
		    <!-- カスタムページネーション -->
		    <?php
		    $pagination_args = array(
		        'total'             => $query->max_num_pages,
		        'current'           => $paged,
		        'prev_text'         => __('&lt;'),
		        'next_text'         => __('&gt;'),
		        'type'              => 'plain', // シンプルな出力
		        'screen_reader_text'=> __('投稿ナビゲーション'),
		    );
		
		    $pagination = paginate_links($pagination_args);
		
		    if ($pagination) :
		        ?>
		        <nav class="navigation pagination" role="navigation" aria-label="投稿">
		            <h2 class="screen-reader-text"><?php echo $pagination_args['screen_reader_text']; ?></h2>
		            <div class="nav-links">
		                <?php echo $pagination; // ページネーションを出力 ?>
		            </div>
		        </nav>
		        <?php
		    endif;
		    ?>
		</div>
        <!-- archives_container -->
    </section>
</div>
<!-- container -->

<?php get_footer(); ?>